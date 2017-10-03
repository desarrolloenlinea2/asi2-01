/*-- MANTENIMIENTO DE LA TABLA DE TRANSACCIONES - ticket_progresos*/

-- SELECT A LA TABLA DE TRANSACCIONES
SELECT `ticket_progresos`.`Id`,
    `ticket_progresos`.`Descripcion`,
    `ticket_progresos`.`Fecha_Progreso`,
    `ticket_progresos`.`tickets_Id`
FROM `seraptiket`.`ticket_progresos`;


-- INSERT A LA TABLA DE TRANSACCIONES ticket_progresos
INSERT INTO `seraptiket`.`ticket_progresos`
(`Id`,
`Descripcion`,
`Fecha_Progreso`,
`tickets_Id`)
VALUES
(<{Id: }>,
<{Descripcion: }>,
<{Fecha_Progreso: }>,
<{tickets_Id: }>);

-- UPDATE A LA TABLA DE TRANSACCIONES ticket_progresos
UPDATE `seraptiket`.`ticket_progresos`
SET
`Id` = <{Id: }>,
`Descripcion` = <{Descripcion: }>,
`Fecha_Progreso` = <{Fecha_Progreso: }>,
`tickets_Id` = <{tickets_Id: }>
WHERE `Id` = <{expr}>;

-- DELETE A LA TABLA DE TRANSACCIONES
DELETE FROM `seraptiket`.`ticket_progresos`
WHERE <{where_expression}>;


