/*-- MANTENIMIENTO DE LA TABLA DE CODIGOS- ticket_estados*/

-- SELECT A LA TABLA DE CODIGO ticket_estados

SELECT `ticket_estados`.`Id`,
    `ticket_estados`.`Estado`
FROM `seraptiket`.`ticket_estados`;


-- INSERT A LA TABLA DE CODIGO ticket_estados
INSERT INTO `seraptiket`.`ticket_estados`
(`Id`,
`Estado`)
VALUES
(<{Id: }>,
<{Estado: }>);


-- UPDATE A LA TABLA DE CODIGO ticket_estados
UPDATE `seraptiket`.`ticket_estados`
SET
`Id` = <{Id: }>,
`Estado` = <{Estado: }>
WHERE `Id` = <{expr}>;


-- DELETE A LA TABLA DE CODIGO ticket_estados
DELETE FROM `seraptiket`.`ticket_estados`
WHERE <{where_expression}>;
