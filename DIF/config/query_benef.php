<?php
                                    $id = $_GET['id'];
                                    $query = "SELECT 
                                                b.id_benef, b.a_paterno, b.a_materno, b.nombres, b.imgbenef, b.barcode1,
                                                g.telefono,g.ine,g.curp, g.nacimiento, g.edad, g.otrodoc,
                                                s.genero,
                                                u.username,
                                                ns.seccion,
                                                l.localidad,
                                                CONCAT( ca.calle,' Ext ', ca.exte,' Int ',ca.inte) AS domicilio,
                                                ca.calle, ca.exte,ca.inte,
                                                co.colonia,                          
                                                com.observaciones,com.img_ine,com.img_curp,com.img_otro,
                                                f.f_alta,
                                                cp.cp,
                                                cb.f_generado
                                                from beneficiario b 
                                                INNER JOIN generales g on b.id_gene1 = g.id_gene 
                                                INNER JOIN sexo s on g.id_sex = s.id_sexo
                                                INNER JOIN capt c on g.id_capt1 = c.id_capt
                                                INNER JOIN users u on c.id_user1 = u.id_user
                                                INNER JOIN secdom sd on b.id_secdom1 = sd.id_secdom
                                                INNER JOIN n_seccion ns on sd.id_nsec1 = ns.id_nsec
                                                INNER JOIN localidad l on sd.id_loc1 = l.id_loc
                                                INNER JOIN direccion d on sd.id_direc1 = d.id_direc 
                                                INNER JOIN calle ca on  d.id_calle1 = ca.id_calle
                                                INNER JOIN colonia co on d.id_col1 = co.id_col
                                                INNER JOIN cp_combo cp on d.id_cp1 = cp.id_cpcombo                            
                                                INNER JOIN comentarios com on b.id_com1 = com.id_com
                                                INNER JOIN fechas f on b.id_fechas1 = f.id_fechas
                                                INNER JOIN barcode cb on b.barcode1 = cb.barcode
                                                WHERE id_benef = $id ";
            
                                    $resultado = mysqli_query($conexion, $query) or die($conexion->error);
                                    $row = $resultado->fetch_assoc();
                                    $imagen = $row['imgbenef'];
            
                                    ini_set('date.timezone', 'America/Mexico_City');
                                    $date = date('Y-m-d H:i:s');
            
                                    $host = gethostname();
                                    $ip = gethostbyname("www.w3schools.com");
                                    $info = php_uname();
            
                                    $nomCompleto = $row['a_paterno'] . " " . $row['a_materno'] . " " . $row['nombres'];
                                    $ine = $row['img_ine'];
                                    $curp = $row['img_curp'];
                                    $otro = $row['img_otro'];
            
                                    ?>