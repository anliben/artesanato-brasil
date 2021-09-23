CREATE TABLE "pecas" (
                         "ID"	INTEGER,
                         "nome"	TEXT,
                         "descricao"	TEXT,
                         "foto"	TEXT,
                         "star"	NUMERIC,
                         "categoria"	TEXT,
                         "author"	INTEGER,
                         PRIMARY KEY("ID" AUTOINCREMENT)
);

CREATE TABLE "profile" (
                           "ID"	INTEGER,
                           "nome"	TEXT,
                           "email"	TEXT UNIQUE,
                           "password"	TEXT,
                           "descricao"	TEXT,
                           "star"	TEXT,
                           "telefone"	TEXT UNIQUE,
                           "image"	TEXT,
                           PRIMARY KEY("ID" AUTOINCREMENT)
);
