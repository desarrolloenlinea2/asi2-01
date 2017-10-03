
/*-- MANTENIMIENTO DE LA TABLA DE CODIGOS- ticket_tipos*/

-- SELECT A LA TABLA DE CODIGO ticket_tipos
SELECT `ticket_tipos`.`Id`,
    `ticket_tipos`.`Tipo`
FROM `seraptiket`.`ticket_tipos`;


-- INSERT A LA TABLA DE CODIGO ticket_tipos
INSERT INTO `seraptiket`.`ticket_tipos`
(`Id`,
`Tipo`)
VALUES
(<{Id: }>,
<{Tipo: }>);


-- UPDATE A LA TABLA DE CODIGO ticket_tipos
UPDATE `seraptiket`.`ticket_tipos`
SET
`Id` = <{Id: }>,
`Tipo` = <{Tipo: }>
WHERE `Id` = <{expr}>;


-- DELETE A LA TABLA DE CODIGO ticket_tipos
DELETE FROM `seraptiket`.`ticket_tipos`
WHERE <{where_expression}>;
