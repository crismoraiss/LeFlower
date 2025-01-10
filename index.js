//importação do módulo gerenciador de ambiente
require("dotenv").config();

const router = express.Router();

const nodemailer = require("nodemailer");

//importar o express
const express = require("express");

//importar o módulo do mysql
const mysql = require("mysql2");

//importar o módulo do bcrypt para criptgrafia de senha

//importar o módulo do jsonwebtoken para criptografia de sessão
const jwt = require("jsonwebtoken");

const bodyParser = require("body-parser");

//importação do módulo de cross platform CORS
const cors = require("cors");

const morgan = require("morgan");

//instância do express representada por app
const app = express();

//Ativar a manipulação de dados em JSON
app.use(express.json());

//adicionar o cors ao projeto
app.use(cors());

app.use(morgan("combined"));

/* -------------- Banco de dados ---------------------
configurar a conexão com o banco de dados mysql passando
 - host(servidor de banco de dados)
 - nome de usuario
 - nome do banco
 - senha de acesso ao banco
 - porta de conexão
*/

const con = mysql.createConnection({
  host: process.env.DB_HOST,
  database: process.env.DB_DATABASE,
  user: process.env.DB_USERNAME,
  password: process.env.PASS_DB,
  port: process.env.DB_PORT,
});
/*
Para ativar a conexão com o banco de dados, iremos
usar o comando connect. Estes comand possui um
callback que verifica se houve um erro na conexão
com o banco de dados
*/
con.connect((erro) => {
  if (erro) {
    return console.error(`Erro durante a conexao -> ${erro}`);
  }
  console.log(`Conexao estabelecida ${con.threadId}`);
});

// Configurar um endpoint para enviar e-mails
app.post("/enviar-email", (req, res) => {
  const { destinatario, assunto, corpo } = req.body;

  // Configurar o transporter para enviar e-mails
  const transporter = nodemailer.createTransport({
    service: "Hotmail",
    auth: {
      user: process.env.EMAIL_USER,
      pass: process.env.EMAIL_PASSWORD,
    },
  });

  // Configurar o email
  const mailOptions = {
    from: process.env.EMAIL_USER,
    to: destinatario,
    subject: assunto,
    text: corpo,
  };

  // Enviar o e-mail
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      console.error("Erro ao enviar o e-mail:", error);
      res.status(500).send({ output: "Erro ao enviar o e-mail", erro: error });
    } else {
      console.log("E-mail enviado com sucesso:", info.response);
      res.status(200).send({ output: "E-mail enviado com sucesso" });
    }
  });
});

app.get("/list/usuarios", (req, res) => {
  con.query("SELECT * FROM tblusuarios", (error, result) => {
    if (!error) {
      return res.status(200).send({ output: "Ok", data: result });
    } else
      return res.status(500).send({
        output: "Erro interno ao processar a solicitação",
        erro: error,
      });
  });
});

app.get("/list/funcionarios", (req, res) => {
  con.query("SELECT * FROM funcionarios", (error, result) => {
    if (!error) {
      return res.status(200).send({ output: "Ok", data: result });
    } else
      return res.status(500).send({
        output: "Erro interno ao processar a solicitação",
        erro: error,
      });
  });
});

app.get("/list/funcionarios/:id", (req, res) => {
  con.query("SELECT * FROM funcionarios", (error, result) => {
    if (!error) {
      return res.status(200).send({ output: "Ok", data: result });
    } else
      return res.status(500).send({
        output: "Erro interno ao processar a solicitação",
        erro: error,
      });
  });
});

app.post("/insert/usuario", (req, res) => {
  con.query("INSERT INTO tblusuarios SET ?", [req.body], (error, result) => {
    if (!error) {
      return res
        .status(201)
        .send({ output: "Inserção feita com sucésso", data: result });
    } else return res.status(500).send({ output: "Erro interno", erro: error });
  });
});

app.post("/insert/funcionarios", (req, res) => {
  con.query("INSERT INTO funcionarios SET ?", [req.body], (error, result) => {
    if (!error) {
      return res
        .status(201)
        .send({ output: "Inserção feita com sucésso", data: result });
    } else return res.status(500).send({ output: "Erro interno", erro: error });
  });
});
app.put("/update/cliente/:id", (req, res) => {
  con.query(
    "UPDATE cliente set ? WHERE idcliente=?",
    [req.body, req.params.id],
    (error, result) => {
      if (!error)
        return res
          .status(202)
          .send({ output: "Tabela atualizada com exito", data: result });
      else
        return res
          .status(500)
          .send({ output: "Não foi possivel atualizar a tabela", erro: error });
    }
  );
});

app.put("/update/funcionarios/:id", (req, res) => {
  con.query(
    "UPDATE funcionarios set ? WHERE idfuncionarios=?",
    [req.body, req.params.id],
    (error, result) => {
      if (!error)
        return res
          .status(202)
          .send({ output: "Tabela atualizada com exito", data: result });
      else
        return res
          .status(500)
          .send({ output: "Não foi possivel atualizar a tabela", erro: error });
    }
  );
});

app.delete("/delete/funcionarios/:id", (req, res) => {
  con.query(
    "DELETE FROM funcionarios WHERE idfuncionarios=?",
    [req.params.id],
    (error, result) => {
      if (!error)
        return res
          .status(204)
          .send({ output: "Funcionario deletado", data: result });
      else
        return res.status(500).send({
          output: "Não foi possível deletar o funcionario",
          erro: error,
        });
    }
  );
});

app.delete("/delete/cliente/:id", (req, res) => {
  con.query(
    "DELETE FROM cliente WHERE idcliente=?",
    [req.params.id],
    (error, result) => {
      if (!error)
        return res
          .status(204)
          .send({ output: "Cliente deletado", data: result });
      else
        return res
          .status(500)
          .send({ output: "Não foi possível deletar o cliente", erro: error });
    }
  );
});

//primeira rota para listar os usuarios
app.get("/test/list", verificaToken, (req, res) => {
  let sql = "";
  if (req.content.nomeusuario == "admin") {
    sql = "SELECT * FROM usuario";
  } else {
    sql = `SELECT * FROM usuario WHERE nomeusuario='${req.content.nomeusuario}'`;
  }

  //Vamos executar uma consulta sql para selecionar todos os usuários
  con.query(sql, (error, result) => {
    if (!error) return res.status(200).send({ output: "OK", data: result });
    else
      return res.status(500).send({
        output: `Erro interno ao processar a solicitação`,
        erro: error,
      });
  });
});

//Criação de uma nova rota para efetuar o cadastro dos usuários
app.post("/insert/usuarios", (req, res) => {
  // Realizar a inserção no banco de dados sem criptografia da senha
  con.query("INSERT INTO usuarios SET ?", [req.body], (error, result) => {
    if (!error) {
      return res.status(201).send({ output: `Inserido`, data: result });
    } else {
      return res
        .status(500)
        .send({ output: `Erro ao tentar cadastrar`, erro: error });
    }
  });
});
app.get("/list/usuarios", (req, res) => {
  con.query("SELECT * FROM usuarios", (error, result) => {
    if (!error) {
      return res.status(200).send({ output: "Ok", data: result });
    } else
      return res.status(500).send({
        output: "Erro interno ao processar a solicitação",
        erro: error,
      });
  });
});

//Vamos criar uma rota para atualizar os dados

app.post("/users/login", (req, res) => {
  con.query(
    "SELECT * FROM usuarios WHERE usuario=?",
    [req.body.usuario], // Parâmetro que será usado na consulta SQL
    (error, result) => {
      if (!error) {
        if (!result || result.length === 0) {
          return res
            .status(400)
            .send({ output: `Usuário ou senha incorretos` });
        }

        if (req.body.senha === result[0].senha) {
          return res.status(200).send({ output: "Autenticado com sucesso" });
        } else {
          return res
            .status(400)
            .send({ output: "Usuário ou senha incorretos" });
        }
      } else {
        return res
          .status(500)
          .send({ output: `Erro ao tentar executar o login`, erro: error });
      }
    }
  );
});
//Criação do token para um usuario
function criarToken(id, usuario, email) {
  return jwt.sign(
    { idusuario: id, nomeusuario: usuario, email: email },
    process.env.JWT_KEY,
    { expiresIn: process.env.JWT_EXPIRES, algorithm: "HS256" }
  );
}

//Verificar se o usuário tem um token válido. Em caso positivo, significa que
//ele logou e, portanto, pode atualizar os dados
function verificaToken(req, res, next) {
  const token_enviado = req.headers.token;
  if (!token_enviado) {
    return res.status(401).send({ output: "Access Denied" });
  }
  jwt.verify(token_enviado, process.env.JWT_KEY, (erro, result) => {
    if (erro) {
      return res.status(500).send({ output: `Internal error to valid token` });
    } else {
      req.content = {
        idusuario: result.idusuario,
        nomeusuario: result.nomeusuario,
        email: result.email,
      };
      next();
    }
  });
}

router.get('/insert/usuario/maxid', async (req, res) => {
    try {
        const [rows, fields] = await db.execute("SELECT MAX(idUsuario) FROM tblusuarios");
        const maxId = rows[0]['MAX(idUsuario)'];
        res.json({ maxId });
    } catch (error) {
        console.error("Erro ao obter o maior ID de usuário:", error);
        res.status(500).json({ error: "Erro ao obter o maior ID de usuário" });
    }
});

// Exporte o router para uso em seu aplicativo
module.exports = router;


//vamos definir a porta de comunicação do servidor
app.listen(process.env.PORT, () =>
  console.log(`Server online at: ${process.env.DB_HOST}:${process.env.PORT}`)
);

// Parte para criar o Front End da página utilizando eventos (cliques e etcetera).
