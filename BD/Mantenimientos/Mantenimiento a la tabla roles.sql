/*-- MANTENIMIENTO DE LA TABLA DE CODIGOS- roles*/

-- SELECT A LA TABLA DE CODIGO roles
SELECT `roles`.`Id`,
    `roles`.`Rol`
FROM `seraptiket`.`roles`;


-- INSERT A LA TABLA DE CODIGO roles
INSERT INTO `seraptiket`.`roles`
(`Id`,
`Rol`)
VALUES
(<{Id: }>,
<{Rol: }>);


-- UPDATE A LA TABLA DE CODIGO roles
UPDATE `seraptiket`.`roles`
SET
`Id` = <{Id: }>,
`Rol` = <{Rol: }>
WHERE `Id` = <{expr}>;


-- DELETE A LA TABLA DE CODIGO roles
DELETE FROM `seraptiket`.`roles`
WHERE <{where_expression}>;
