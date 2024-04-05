-- USE erp_odonto;

INSERT INTO erpo_pais (cmp_pais, cmp_capital, cmp_codigo_iso, cmp_moneda)
VALUES
  ('Perú', 'Lima', 'PE', 'SOL'),
  ('Bolivia', 'La Paz', 'BO', 'BOL'),
  ('Chile', 'Santiago', 'CL', 'CLP'),
  ('Colombia', 'Bogotá', 'CO', 'COP'),
  ('Ecuador', 'Quito', 'EC', 'USD'),
  ('Paraguay', 'Asunción', 'PY', 'PYG'),
  ('Uruguay', 'Montevideo', 'UY', 'UYU'),
  ('Venezuela', 'Caracas', 'VE', 'VES'),
  ('Argentina', 'Buenos Aires', 'AR', 'ARS');

INSERT INTO erp_odonto.erpo_provincia (cmp_provincia, cmp_distrito, cmp_codigopostal)
VALUES
  ('Lima', 'Lima', '15001'),
  ('Arequipa', 'Arequipa', '04001'),
  ('Cusco', 'Cusco', '08001'),
  ('Piura', 'Piura', '20001'),
  ('Tacna', 'Tacna', '23001'),
  ('Puno', 'Puno', '21001'),
  ('Ica', 'Ica', '11001'),
  ('Loreto', 'Iquitos', '16001'),
  ('Junín', 'Huancayo', '12001'),
  ('La Libertad', 'Trujillo', '13001'),
  ('Lambayeque', 'Chiclayo', '14001'),
  ('San Martín', 'Moyobamba', '22001'),
  ('Ucayali', 'Pucallpa', '25001'),
  ('Cajamarca', 'Cajamarca', '06001'),
  ('Ayacucho', 'Ayacucho', '05001'),
  ('Amazonas', 'Chachapoyas', '01001'),
  ('Huánuco', 'Huánuco', '1001'),
  ('Pasco', 'Cerro de Pasco', '1901'),
  ('Moquegua', 'Moquegua', '2101'),
  ('Madre de Dios', 'Puerto Maldonado', '2101'),
  ('Tumbes', 'Tumbes', '2401'),
  ('Apurímac', 'Abancay', '301'),
  ('Huancavelica', 'Huancavelica', '401'),
  ('Callao', 'Callao', '601'),
  ('La Paz', 'La Paz', 'LPB'),
  ('Santa Cruz', 'Santa Cruz', 'SRZ'),
  ('Cochabamba', 'Cochabamba', 'CBB'),
  ('Oruro', 'Oruro', 'ORU'),
  ('Potosí', 'Potosí', 'POI'),
  ('Tarija', 'Tarija', 'TJA'),
  ('Chuquisaca', 'Sucre', 'SRE'),
  ('Beni', 'Trinidad', 'TDD'),
  ('Pando', 'Cobija', 'CJA');

INSERT INTO erpo_tipodocidentidad (cmp_tipo_docidentidad)
VALUES
  ('DNI'),
  ('RUC'),
  ('CARNET EXTRANJERIA'),
  ('PASAPORTE');

INSERT INTO erpo_servicio (cmp_nombre_servicio, cmp_costo)
VALUES
('Ortodoncia', '125.3'),
('Puentes dentales', '122.00'),
('Servicios de limpieza dental', '90.00'),
('Extracciones dentales', '234.00'),
('Examen Bucodental Inicial', '103.00');
