CREATE TABLE alumno (
    id_alumno INT PRIMARY KEY IDENTITY(1,1),
    ap_paterno NVARCHAR(255) COLLATE Latin1_General_CI_AS,
    ap_materno NVARCHAR(255) COLLATE Latin1_General_CI_AS,
    nombre NVARCHAR(255) COLLATE Latin1_General_CI_AS,
    ex_parcial FLOAT,
    ex_final FLOAT,
);