const mysql = require("mysql2");

const connection = mysql.createConnection({
    host: "sql7.freesqldatabase.com",
    user: "sql7386311",
    database: "sql7386311",
    password: "3rW9W2gPv1"
});
connection.connect(function(err) {
    if (err) {
        return console.error("Ошибка: " + err.message);
    } else {
        console.log("Подключение к серверу MySQL успешно установлено");
    }
});
connection.execute("SELECT * FROM h_artifacts where id =1",
    function(err, results, fields) {
        console.log(err);
        console.log(results); // собственно данные
        //console.log(fields); // мета-данные полей 
    });