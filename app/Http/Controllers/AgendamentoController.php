<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\AgendamentoEmail;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Especialidade;
use App\Models\ServicosModel;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AgendamentoController extends Controller
{
    public function index(Request $request)
    {
        $idCliente = session('id');
        $cliente = Cliente::find($idCliente);
        $especialidades = Especialidade::select('especialidade')->distinct()->get();

        if ($request->wantsJson()) {
            return response()->json([
                'cliente' => $cliente,
                'especialidades' => $especialidades
            ]);
        }

        return view('site.dashboard.cliente.agendamento', compact('cliente', 'especialidades'));
    }

    public function listarServicos(Request $request)
    {
        $especialidade = $request->input('especialidade');
        $servicos = ServicosModel::where('tipoServico', $especialidade)
            ->select('idServico', 'nomeServico', 'valorServico', 'duracaoServico', 'descricaoServico')
            ->get();

        return response()->json($servicos);
    }

    public function listarHorarios(Request $request)
    {
        $especialidade = $request->input('especialidade');
        $tipoServico = $request->input('tipoServico');
        $data = $request->input('data');

        // Obtendo a data e hora atual com o fuso horário correto
        $dataAtual = Carbon::now('America/Sao_Paulo')->format('Y-m-d');
        $horaAtual = Carbon::now('America/Sao_Paulo')->format('H:i:s');

        $sql = "SELECT
                    f.idFuncionario,
                    f.nomeFuncionario,
                    f.cargoFuncionario,
                    h.horario,
                    s.duracaoServico,
                    f.fotoFuncionario
                FROM
                    tblfuncionarios f
                CROSS JOIN
                    tblhorarios h
                LEFT JOIN
                    tblservicos s ON s.idServico = ?
                LEFT JOIN
                    tblhorarios_disponiveis hd ON f.idFuncionario = hd.idFuncionario
                    AND h.horario >= hd.data_hora_inicial
                    AND DATE_ADD(h.horario, INTERVAL TIME_TO_SEC(s.duracaoServico) SECOND) <= hd.data_hora_final
                LEFT JOIN
                    tblagendamentos a ON f.idFuncionario = a.idFuncionario
                    AND DATE(a.dataAgendamento) = ?
                    AND (h.horario BETWEEN a.data_hora_inicial AND a.data_hora_final
                         OR DATE_ADD(h.horario, INTERVAL TIME_TO_SEC(s.duracaoServico) SECOND) BETWEEN a.data_hora_inicial AND a.data_hora_final)
                JOIN
                    tblespecialidade e ON f.idEspecialidade = e.idEspecialidade
                WHERE
                    hd.idFuncionario IS NOT NULL
                    AND a.idAgendamento IS NULL
                    AND e.especialidade = ?
                    AND (? > ? OR (? = ? AND h.horario > ?))
                ORDER BY
                    f.nomeFuncionario,
                    h.horario";

        try {
            $horarios = DB::select(DB::raw($sql), [
                $tipoServico,
                $data,
                $especialidade,
                $data,
                $dataAtual,
                $data,
                $dataAtual,
                $horaAtual
            ]);

            return response()->json($horarios);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao listar horários'], 500);
        }
    }



    public function agendar(Request $request)
    {
        $request->validate([
            'data'          => 'required|date',
            'especialidade' => 'required|string|max:100',
            'horario'       => 'required|date_format:H:i',
            'idCliente'     => 'required|integer',
            'idFuncionario' => 'required|integer',
            'idServico'     => 'required|integer'
        ]);

        $servico = ServicosModel::find($request->input('idServico'));
        if (!$servico) {
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Serviço não encontrado.'], 404);
            }
            return back()->withErrors(['idServico' => 'Serviço não encontrado.']);
        }

        $cliente = Cliente::find($request->input('idCliente'));
        if (!$cliente) {
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Cliente não encontrado.'], 404);
            }
            return back()->withErrors(['idCliente' => 'Cliente não encontrado.']);
        }

        $funcionario = Funcionario::find($request->input('idFuncionario'));
        if (!$funcionario) {
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Funcionário não encontrado.'], 404);
            }
            return back()->withErrors(['idFuncionario' => 'Funcionário não encontrado.']);
        }

        // Verificando se o cliente já tem um agendamento para o mesmo horário
        $existentes = Agendamento::where('idCliente', $request->input('idCliente'))
            ->where('dataAgendamento', $request->input('data'))
            ->where('data_hora_inicial', $request->input('horario'))
            ->first();
        if ($existentes) {
            if ($request->wantsJson()) {
                return response()->json(['error' => 'Você já possui um agendamento para esse horário.'], 409);
            }
            return back()->with('error', 'Você já possui um agendamento para esse horário.');
        }

        list($horas, $minutos) = explode(':', $servico->duracaoServico);
        $horaInicial = Carbon::createFromFormat('H:i', $request->input('horario'));
        $horaInicial->addHours($horas)->addMinutes($minutos);
        $dataHoraFinal = $horaInicial->format('H:i');

        $agendamento = new Agendamento();
        $agendamento->dataAgendamento = $request->input('data');
        $agendamento->categoriaAgendamento = $request->input('especialidade');
        $agendamento->data_hora_inicial = $request->input('horario');
        $agendamento->data_hora_final = $dataHoraFinal;
        $agendamento->statusAgendamento = 'pendente';
        $agendamento->idCliente = $request->input('idCliente');
        $agendamento->idFuncionario = $request->input('idFuncionario');
        $agendamento->idServico = $request->input('idServico');
        $agendamento->save();

        Log::info('Email do cliente: ' . $cliente->emailCliente);

        try {
            Mail::to($cliente->emailCliente)->send(new AgendamentoEmail($agendamento));
            Log::info('Email enviado para: ' . $cliente->emailCliente);
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email: ' . $e->getMessage());
        }

        if ($request->wantsJson()) {
            return response()->json($agendamento, 201);
        }

        return redirect()->route('dashboard.meusagenda')->with('success', 'Agendamento criado com sucesso e email enviado.');
    }


    public function confirmar($id)
    {
        $agendamento = Agendamento::find($id);

        if ($agendamento) {
            $agendamento->statusAgendamento = 'confirmado';
            $agendamento->save();

            if (request()->wantsJson()) {
                return response()->json(['message' => 'Agendamento confirmado com sucesso.']);
            }

            return "Agendamento confirmado com sucesso.";
        } else {
            if (request()->wantsJson()) {
                return response()->json(['error' => 'Agendamento não encontrado.'], 404);
            }

            return "Agendamento não encontrado.";
        }
    }

    public function confirmarAgendamento(Request $request, $id)
    {
        $agendamento = Agendamento::find($id);
        if ($agendamento) {
            $agendamento->statusAgendamento = 'confirmado';
            $agendamento->save();

            if ($request->wantsJson()) {
                return response()->json(['success' => 'Agendamento confirmado com sucesso'], 200);
            }

            return redirect()->back()->with('success', 'Agendamento confirmado com sucesso');
        }

        if ($request->wantsJson()) {
            return response()->json(['error' => 'Agendamento não encontrado'], 404);
        }

        return redirect()->back()->with('error', 'Agendamento não encontrado');
    }

    public function cancelarAgendamento(Request $request, $id)
    {
        $agendamento = Agendamento::find($id);
        if ($agendamento) {
            $agendamento->statusAgendamento = 'cancelado';
            $agendamento->save();

            if ($request->wantsJson()) {
                return response()->json(['success' => 'Agendamento cancelado com sucesso'], 200);
            }

            return redirect()->back()->with('success', 'Agendamento cancelado com sucesso');
        }

        if ($request->wantsJson()) {
            return response()->json(['error' => 'Agendamento não encontrado'], 404);
        }

        return redirect()->back()->with('error', 'Agendamento não encontrado');
    }


}


