-- Extras son las cervezas diferentes o edición limitada

INSERT INTO Productos (Marca, Variedad, Img, Precio, Stock, Descripcion) VALUES
('Cruzcampo', 'Especial', 'front-bottle-especial.png', 2.80, 80),
('Cruzcampo', 'Sin Gluten', 'front-bottle-singluten.png', 2.90, 90),
('Cruzcampo', 'Radler', 'front-bottle-radler.png', 2.70, 60),
('Cruzcampo', '0.0', 'front-bottle-cruzcampo00.png', 3.20, 50),
('Cruzcampo', 'Extras', 'front-bottle-cana.png ', 3.20, 50),
('Cruzcampo', 'Extras', 'front-bottle-reserva.png', 2.50, 100),
('Cruzcampo', 'Extras', 'front-bottle-reserva00.png', 2.50, 100),
('Cruzcampo', 'Extras', 'front-bottle-tremenda.png', 2.50, 100),

('Estrella Galicia', 'Especial', 'botella-estrella-galicia-especial.png', 2.80, 80),
('Estrella Galicia', 'Sin Gluten', 'botella-estrella-galicia-sin-gluten.png', 3.00, 70),
('Estrella Galicia', 'Tostada', 'estrella-galicia-00-tostada-1.png', 2.90, 90),
('Estrella Galicia', '0.0', 'estrella-galicia-00-negra.png', 2.70, 60),
('Estrella Galicia', '0.0', 'botella-estrella-galicia-00.png', 2.70, 60),
('Estrella Galicia', 'Extras', 'ledg-bottle.png', 3.20, 50),
('Estrella Galicia', 'Extras', 'botella-edicion-navidad.png', 3.20, 50),
('Estrella Galicia', 'Extras', 'estrella_galicia_bodega.png', 3.20, 50),

('Mahou', 'Clasica', 'mahou-bottle-clasic.png', 2.40, 110),
('Mahou', 'IPA', 'mahou-bottle-ipa.png', 2.70, 90),
('Mahou', 'Sin Gluten', 'mahou-bottle-gluten.png', 2.90, 70),
('Mahou', 'Radler', 'mahou-bottle-radler.png', 2.80, 80),
('Mahou', '0.0', 'M00T_33cl.png', 2.60, 60),
('Mahou', 'Tostada', 'M00T_33cl.png', 2.60, 60),
('Mahou', 'Barrica', 'Barrica_Or.png', 2.60, 60),
('Mahou', 'Barrica', 'Barrica_Bou.png', 2.60, 60),
('Mahou', 'Barrica', 'Barrica_12.png', 2.60, 60),

('Heineken', 'Clasica', 'heineken-original-bottle.png', 2.60, 110),
('Heineken', 'Clasica', 'heineken-original-can.png', 2.60, 110),
('Heineken', '0.0', 'heineken-00-bottle.png', 2.80, 60),
('Heineken', 'Extras', 'heineken-silver-sleek-can-product.png', 2.60, 110),
('Heineken', 'Extras', 'heineken-draught-glass.png', 2.60, 110),
('Heineken', 'Extras', 'heineken-extra-cold-glass.png', 2.60, 110),
('Heineken', 'Extras', 'heineken-draught-keg.png', 2.60, 110),
('Heineken', 'Extras', 'heineken-sub.png', 2.60, 110),

('Alhambra', 'Clasica', 'alhambra-1925.png', 2.70, 100),
('Alhambra', 'Clasica', 'alhambra-tradicional.png', 2.70, 100),
('Alhambra', 'Especial', 'alhambra-especial.png', 3.00, 80),
('Alhambra', 'Especial', 'alhambra-especial-sin.png', 3.00, 80),
('Alhambra', 'IPA', 'alhambra-reserva-citra-ipa.png', 2.90, 60),
('Alhambra', 'Barrica', 'alhambra-barrica-ron-granada.png', 3.40, 50),
('Alhambra', 'Extras', 'alhambra-reserva.png', 3.40, 50),
('Alhambra', 'Extras', 'alhambra-numeradas.png', 3.40, 50);

-- Añadir datos a descripción
UPDATE Productos 
SET Descripcion = 
    CASE 
        WHEN Marca = 'Cruzcampo' AND Variedad = 'Especial' THEN 'Una cerveza clásica y refrescante con un sabor suave y equilibrado, perfecta para cualquier ocasión.'
        WHEN Marca = 'Cruzcampo' AND Variedad = 'Sin Gluten' THEN 'Una opción sin gluten para los amantes de la cerveza, con todo el sabor característico de Cruzcampo.'
        WHEN Marca = 'Cruzcampo' AND Variedad = 'Radler' THEN 'Una combinación única de cerveza rubia y refresco de limón, ideal para los días más calurosos.'
        WHEN Marca = 'Cruzcampo' AND Variedad = '0.0' THEN 'Una cerveza sin alcohol con todo el sabor y la calidad de Cruzcampo, perfecta para disfrutar en cualquier momento.'
        WHEN Marca = 'Cruzcampo' AND Variedad = 'Extras' THEN 'Ediciones especiales y cervezas únicas de Cruzcampo, perfectas para los aficionados más exigentes.'
        
        WHEN Marca = 'Mahou' AND Variedad = 'Clasica' THEN 'La cerveza original de Mahou, con un sabor suave y equilibrado que la hace perfecta para acompañar cualquier comida.'
        WHEN Marca = 'Mahou' AND Variedad = 'IPA' THEN 'Una cerveza con un toque de lúpulo extra que le da un sabor intenso y aromático, perfecta para los amantes de la cerveza artesanal.'
        WHEN Marca = 'Mahou' AND Variedad = 'Sin Gluten' THEN 'Una opción sin gluten para disfrutar del auténtico sabor de Mahou, elaborada con los mejores ingredientes.'
        WHEN Marca = 'Mahou' AND Variedad = 'Radler' THEN 'Una mezcla refrescante de cerveza rubia y zumo de limón, perfecta para los días más calurosos del año.'
        WHEN Marca = 'Mahou' AND Variedad = '0.0' THEN 'Una cerveza sin alcohol con todo el sabor y la calidad de Mahou, ideal para aquellos que buscan una alternativa sin alcohol.'
        WHEN Marca = 'Mahou' AND Variedad = 'Tostada' THEN 'Una cerveza tostada con un sabor intenso y un ligero toque caramelizado, perfecta para acompañar platos de carne y quesos.'
        WHEN Marca = 'Mahou' AND Variedad = 'Barrica' THEN 'Cervezas especiales de Mahou envejecidas en barrica, con un sabor único y complejo que sorprenderá a los paladares más exigentes.'
        
        WHEN Marca = 'Estrella Galicia' AND Variedad = 'Especial' THEN 'Una cerveza clásica y equilibrada con un sabor suave y refrescante, elaborada con los mejores ingredientes.'
        WHEN Marca = 'Estrella Galicia' AND Variedad = 'Sin Gluten' THEN 'Una opción sin gluten para disfrutar del auténtico sabor de Estrella Galicia, elaborada con los mismos estándares de calidad.'
        WHEN Marca = 'Estrella Galicia' AND Variedad = 'Tostada' THEN 'Una cerveza tostada con un sabor intenso y un ligero toque caramelizado, perfecta para acompañar platos de carne y quesos.'
        WHEN Marca = 'Estrella Galicia' AND Variedad = '0.0' THEN 'Una cerveza sin alcohol con todo el sabor y la calidad de Estrella Galicia, elaborada con ingredientes naturales.'
        WHEN Marca = 'Estrella Galicia' AND Variedad = 'Extras' THEN 'Ediciones especiales y cervezas únicas de Estrella Galicia, perfectas para los momentos más especiales.'
        
        WHEN Marca = 'Heineken' AND Variedad = 'Clasica' THEN 'La cerveza original de Heineken, con un sabor suave y refrescante que la hace perfecta para cualquier ocasión.'
        WHEN Marca = 'Heineken' AND Variedad = '0.0' THEN 'Una cerveza sin alcohol con todo el sabor y la calidad de Heineken, elaborada con los mismos estándares de calidad.'
        WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'Ediciones especiales y cervezas únicas de Heineken, perfectas para los momentos más especiales.'
        
        WHEN Marca = 'Alhambra' AND Variedad = 'Clasica' THEN 'La cerveza original de Alhambra, con un sabor suave y refrescante que la hace perfecta para cualquier ocasión.'
        WHEN Marca = 'Alhambra' AND Variedad = 'Especial' THEN 'Una cerveza especial de Alhambra con un sabor intenso y un ligero toque caramelizado, ideal para los momentos más especiales.'
        WHEN Marca = 'Alhambra' AND Variedad = 'IPA' THEN 'Una cerveza IPA de Alhambra con un sabor afrutado y un amargor equilibrado, perfecta para los amantes de las cervezas lupuladas.'
        WHEN Marca = 'Alhambra' AND Variedad = 'Barrica' THEN 'Cervezas especiales de Alhambra envejecidas en barrica, con un sabor único y complejo que sorprenderá a los paladares más exigentes.'
        WHEN Marca = 'Alhambra' AND Variedad = 'Extras' THEN 'Ediciones especiales y cervezas únicas de Alhambra, perfectas para los momentos más especiales.'
        
        
    END;

-- Añadir datos a Img
UPDATE Productos 
SET Img = CASE 
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Especial' THEN 'front-bottle-especial.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Sin Gluten' THEN 'front-bottle-singluten.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Radler' THEN 'front-bottle-radler.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = '0.0' THEN 'front-bottle-cruzcampo00.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Extras' THEN 'front-bottle-cana.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Extras' THEN 'front-bottle-reserva.png'
    WHEN Marca = 'Cruzcampo' AND Variedad = 'Extras' THEN 'front-bottle-reserva00.png'

    WHEN Marca = 'Mahou' AND Variedad = 'Clasica' THEN 'mahou-bottle-clasic.png'
    WHEN Marca = 'Mahou' AND Variedad = 'IPA' THEN 'mahou-bottle-ipa.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Sin Gluten' THEN 'mahou-bottle-gluten.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Radler' THEN 'mahou-bottle-radler.png'
    WHEN Marca = 'Mahou' AND Variedad = '0.0' THEN 'M00T_33cl.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Tostada' THEN 'M00T_33cl.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Barrica' THEN 'Barrica_Or.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Barrica' THEN 'Barrica_Bou.png'
    WHEN Marca = 'Mahou' AND Variedad = 'Barrica' THEN 'Barrica_12.png'

    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Especial' THEN 'botella-estrella-galicia-especial.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Sin Gluten' THEN 'botella-estrella-galicia-sin-gluten.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Tostada' THEN 'estrella-galicia-00-tostada-1.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = '0.0' THEN 'estrella-galicia-00-tostada-1.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = '0.0' THEN 'estrella-galicia-00-negra.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = '0.0' THEN 'botella-estrella-galicia-00.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Extras' THEN 'ledg-bottle.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Extras' THEN 'botella-edicion-navidad.png'
    WHEN Marca = 'Estrella Galicia' AND Variedad = 'Extras' THEN 'estrella_galicia_bodega.png'

    WHEN Marca = 'Heineken' AND Variedad = 'Clasica' THEN 'heineken-original-bottle.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Clasica' THEN 'heineken-original-can.png'
    WHEN Marca = 'Heineken' AND Variedad = '0.0' THEN 'heineken-00-bottle.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'heineken-silver-sleek-can-product.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'heineken-draught-glass.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'heineken-extra-cold-glass.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'heineken-draught-keg.png'
    WHEN Marca = 'Heineken' AND Variedad = 'Extras' THEN 'heineken-sub.png'

    WHEN Marca = 'Alhambra' AND Variedad = 'Clasica' THEN 'alhambra-1925.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Clasica' THEN 'alhambra-tradicional.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Especial' THEN 'alhambra-especial.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Especial' THEN 'alhambra-especial-sin.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'IPA' THEN 'alhambra-reserva-citra-ipa.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Barrica' THEN 'alhambra-barrica-ron-granada.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Extras' THEN 'alhambra-reserva.png'
    WHEN Marca = 'Alhambra' AND Variedad = 'Extras' THEN 'alhambra-numeradas.png'
END;


-- BBDD final
INSERT INTO Productos (marca, variedad, Img, precio, stock, Descripcion, created_at, updated_at, remember_token) VALUES
 ('Cruzcampo', 'Especial', 'front-bottle-especial.png', 2.80, 80, 'Cerveza Cruzcampo Especial, una cerveza de sabor único y refrescante.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Sin Gluten', 'front-bottle-singluten.png', 2.90, 90, 'Cerveza Cruzcampo Sin Gluten, ideal para aquellos con intolerancia al gluten.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Radler', 'front-bottle-radler.png', 2.70, 60, 'Cerveza Cruzcampo Radler, una combinación refrescante de cerveza y limón.', NOW(), NOW(), NULL),
 ('Cruzcampo', '0.0', 'front-bottle-cruzcampo00.png', 3.20, 50, 'Cerveza Cruzcampo 0.0, todo el sabor de Cruzcampo sin alcohol.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Extras', 'front-bottle-cana.png', 3.20, 50, 'Cerveza Cruzcampo Extras, disfruta de esta variedad especial.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Extras', 'front-bottle-reserva.png', 2.50, 100, 'Cerveza Cruzcampo Extras Reserva, una opción de alta calidad.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Extras', 'front-bottle-reserva00.png', 2.50, 100, 'Cerveza Cruzcampo Extras Reserva 0.0, calidad sin alcohol.', NOW(), NOW(), NULL),
 ('Cruzcampo', 'Extras', 'front-bottle-tremenda.png', 2.50, 100, 'Cerveza Cruzcampo Extras Tremenda, una elección excepcional.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Especial', 'botella-estrella-galicia-especial.png', 2.80, 80, 'Cerveza Estrella Galicia Especial, una cerveza con carácter.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Sin Gluten', 'botella-estrella-galicia-sin-gluten.png', 3.00, 70, 'Cerveza Estrella Galicia Sin Gluten, calidad para todos.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Tostada', 'estrella-galicia-00-tostada-1.png', 2.90, 90, 'Cerveza Estrella Galicia 1906 Tostada, un sabor intenso.', NOW(), NOW(), NULL),
 ('Estrella Galicia', '0.0', 'estrella-galicia-00-negra.png', 2.70, 60, 'Cerveza Estrella Galicia 0.0 Negra, disfruta sin límites.', NOW(), NOW(), NULL),
 ('Estrella Galicia', '0.0', 'botella-estrella-galicia-00.png', 2.70, 60, 'Cerveza Estrella Galicia 0.0, sabor auténtico sin alcohol.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Extras', 'ledg-bottle.png', 3.20, 50, 'Cerveza Estrella Galicia Extras, una variedad especial.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Extras', 'botella-edicion-navidad.png', 3.20, 50, 'Cerveza Estrella Galicia Edición Navidad, una delicia estacional.', NOW(), NOW(), NULL),
 ('Estrella Galicia', 'Extras', 'estrella_galicia_bodega.png', 3.20, 50, 'Cerveza Estrella Galicia Bodega, calidad suprema.', NOW(), NOW(), NULL),
 ('Mahou', 'Clasica', 'mahou-bottle-clasic.png', 2.40, 110, 'Cerveza Mahou Clásica, sabor tradicional desde 1890.', NOW(), NOW(), NULL),
 ('Mahou', 'IPA', 'mahou-bottle-ipa.png', 2.70, 90, 'Cerveza Mahou IPA, un toque diferente y refrescante.', NOW(), NOW(), NULL),
 ('Mahou', 'Sin Gluten', 'mahou-bottle-gluten.png', 2.90, 70, 'Cerveza Mahou Sin Gluten, disfruta sin preocupaciones.', NOW(), NOW(), NULL),
 ('Mahou', 'Radler', 'mahou-bottle-radler.png', 2.80, 80, 'Cerveza Mahou Radler, una combinación única de sabores.', NOW(), NOW(), NULL),
 ('Mahou', 'Tostada', 'M00T_33cl.png', 2.60, 60, 'Cerveza Mahou 0.0 Tostada, una experiencia diferente.', NOW(), NOW(), NULL),
 ('Mahou', 'Barrica', 'Barrica_Or.png', 2.60, 60, 'Cerveza Mahou Barrica Oro, calidad excepcional.', NOW(), NOW(), NULL),
 ('Mahou', 'Barrica', 'Barrica_Bou.png', 2.60, 60, 'Cerveza Mahou Barrica Bourbon, una elección sofisticada.', NOW(), NOW(), NULL),
 ('Mahou', 'Barrica', 'Barrica_12.png', 2.60, 60, 'Cerveza Mahou Barrica 12 Meses, una joya de la cervecería.', NOW(), NOW(), NULL),
 ('Heineken', 'Clasica', 'heineken-original-bottle.png', 2.60, 110, 'Cerveza Heineken Clásica, calidad holandesa desde 1873.', NOW(), NOW(), NULL),
 ('Heineken', 'Clasica', 'heineken-original-can.png', 2.60, 110, 'Cerveza Heineken Clásica, disfruta en cualquier momento.', NOW(), NOW(), NULL),
 ('Heineken', '0.0', 'heineken-00-bottle.png', 2.80, 60, 'Cerveza Heineken 0.0, sabor auténtico sin alcohol.', NOW(), NOW(), NULL),
 ('Heineken', 'Extras', 'heineken-silver-sleek-can-product.png', 2.60, 110, 'Cerveza Heineken Silver Sleek, una presentación elegante.', NOW(), NOW(), NULL),
 ('Heineken', 'Extras', 'heineken-draught-glass.png', 2.60, 110, 'Cerveza Heineken Draught Glass, disfruta de una experiencia única.', NOW(), NOW(), NULL),
 ('Heineken', 'Extras', 'heineken-extra-cold-glass.png', 2.60, 110, 'Cerveza Heineken Extra Cold Glass, para los amantes de la frescura.', NOW(), NOW(), NULL),
 ('Heineken', 'Extras', 'heineken-draught-keg.png', 2.60, 110, 'Cerveza Heineken Draught Keg, el complemento perfecto para tu fiesta.', NOW(), NOW(), NULL),
 ('Heineken', 'Extras', 'heineken-sub.png', 2.60, 110, 'Cerveza Heineken Sub, la manera perfecta de beber con amigos.', NOW(), NOW(), NULL),
 ('Alhambra', 'Clasica', 'alhambra-1925.png', 2.70, 100, 'Cerveza Alhambra 1925: Una cerveza clásica con un sabor rico y equilibrado, que rinde homenaje a la tradición cervecera de Granada.', NOW(), NOW(), NULL),
 ('Alhambra', 'Clasica', 'alhambra-tradicional.png', 2.70, 100, 'Cerveza Alhambra Tradicional: Una cerveza de estilo clásico con un carácter suave y refrescante, perfecta para disfrutar en cualquier ocasión.', NOW(), NOW(), NULL),
 ('Alhambra', 'Especial', 'alhambra-especial.png', 3.00, 80, 'Cerveza Alhambra Especial: Una cerveza especial con un sabor único y distintivo, elaborada con ingredientes de la más alta calidad.', NOW(), NOW(), NULL),
 ('Alhambra', 'Especial', 'alhambra-especial-sin.png', 3.00, 80, 'Cerveza Alhambra Especial Sin Alcohol: Una versión sin alcohol de la cerveza Alhambra Especial, que conserva todo su sabor y carácter refrescante.', NOW(), NOW(), NULL),
 ('Alhambra', 'IPA', 'alhambra-reserva-citra-ipa.png', 2.90, 60, 'Cerveza Alhambra Reserva Citra IPA: Una cerveza IPA con un intenso aroma cítrico y un sabor a lúpulo fresco y floral, que ofrece una experiencia de sabor única.', NOW(), NOW(), NULL),
 ('Alhambra', 'Barrica', 'alhambra-barrica-ron-granada.png', 3.40, 50, 'Cerveza Alhambra Barrica Ron Granada: Una cerveza especial envejecida en barricas de ron de Granada, que le confiere un sabor suave y complejo con notas dulces y especiadas.', NOW(), NOW(), NULL),
 ('Alhambra', 'Extras', 'alhambra-reserva.png', 3.40, 50, 'Cerveza Alhambra Reserva: Una cerveza especial reservada para los amantes de la buena cerveza, con un sabor intenso y equilibrado que deja huella en el paladar.', NOW(), NOW(), NULL),
 ('Alhambra', 'Extras', 'alhambra-numeradas.png', 3.40, 50, 'Cerveza Alhambra Numeradas: Una edición limitada de cervezas numeradas, elaboradas con mimo y cuidado para ofrecer una experiencia única e irrepetible.', NOW(), NOW(), NULL);
