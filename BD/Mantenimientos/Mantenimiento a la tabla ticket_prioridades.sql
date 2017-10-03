/*-- MANTENIMIENTO DE LA TABLA DE CODIGOS- ticket_prioridades*/

-- SELECT A LA TABLA DE CODIGO ticket_prioridades

SELECT `ticket_prioridades`.`Id`,
    `ticket_prioridades`.`Prioridad`
FROM `seraptiket`.`ticket_prioridades`;

-- INSERT A LA TABLA DE CODIGO ticket_prioridades
INSERT INTO `seraptiket`.`ticket_prioridades`
(`Id`,
`Prioridad`)
VALUES
(<{Id: }>,
<{Prioridad: }>);

-- UPDATE A LA TABLA DE CODIGO ticket_prioridades
UPDATE `seraptiket`.`ticket_prioridades`
SET
`Id` = <{Id: }>,
`Prioridad` = <{Prioridad: }>
WHERE `Id` = <{expr}>;


-- DELETE A LA TABLA DE CODIGO ticket_prioridades
DELETE FROM `seraptiket`.`ticket_prioridades`
WHERE <{where_expression}>;

