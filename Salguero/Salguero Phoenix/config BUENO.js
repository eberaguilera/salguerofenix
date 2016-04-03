function init()
{
	//Main Menu items:

	menus[0] = new menu(30, "horizontal", 120, 216, -30, 5, "img:images/fondo_bot_chico.jpg", "img:images/fondo_bot_chico.jpg", "Verdana,Helvetica", 9, 
		"bold", "bold", "FF9933", "ffffff", 0, "", 6, "", false, true, true, true, 5, true, 0, 0, "gray");
	menus[0].addItem("index.htm", "", 65, "center", "Inicio", 0);
	menus[0].addItem("la_empresa.htm", "", 95, "center", "La Empresa", 0);
	menus[0].addItem("", "", 95, "center", "Productos", 1);
	menus[0].addItem("videos.htm", "", 75, "center", "Videos", 0);
    menus[0].addItem("servicios.htm", "", 85, "center", "Servicios", 0);
    menus[0].addItem("clientes.htm", "", 85, "center", "Clientes", 0);
    menus[0].addItem("instalaciones.htm", "", 120, "center", "Instalaciones", 0);
    menus[0].addItem("contacto.htm", "", 95, "center", "Contáctenos", 0);
    menus[0].floatMenu(1024, 768, 0, 0);

//Sub Menu for 1th Main Menu Item ("PRODUCTOS"):
	menus[1] = new menu(140, "vertical", 0, 0, -6, 2, "cc3300", "ffffff", "Verdana,Helvetica", 8, "", "", "FFFFFF", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[1].addItem("", "", 30, "center", "Herramientas de Rescate", 2);	
	menus[1].addItem("", "", 30, "center", "Unidades Salguero", 3);
    menus[1].addItem("", "", 30, "center", "Unidades Importados", 5);
    menus[1].addItem("cafs.htm", "", 30, "center", "CAFS", 0);
    menus[1].addItem("", "", 30, "center", "Varios", 7);
	     

//Sub Menu for 1th Main Menu Item ("Herramientas"):
	menus[2] = new menu(180, "vertical", 0, 0, -100, 15, "ff9933", "ffffff", "Verdana,Helvetica", 8, "", "", "FFFFFF", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[2].addItem("centrales_hidro.htm", "", 20, "center", "Centrales Hidráulicas", 0);	
	menus[2].addItem("powers.htm", "", 20, "center", "Powers / Rhams", 0);
    menus[2].addItem("", "", 20, "center", "Equipamiento Manual", 6);
    

//Sub Menu for 1th Main Menu Item ("Autobombas"):
	menus[3] = new menu(140, "vertical", 0, 0, -6, 2, "ff9933", "ffffff", "Verdana,Helvetica", 8, "", "", "FFFFFF", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[3].addItem("ford_f100.htm", "", 20, "center", "Rescate", 0);
	menus[3].addItem("", "", 20, "center", "Urbanas", 4);	
	menus[3].addItem("forestales.htm", "", 20, "center", "Forestales", 0);
    menus[3].addItem("", "", 20, "center", "Cisternas", 12);
    
    
    //Sub Menu for 1th Main Menu Item ("Urbanas"):
	menus[4] = new menu(120, "vertical", 0, 0, -6, -10, "ffff00", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[4].addItem("", "", 20, "center", "livianas", 9);	
	menus[4].addItem("", "", 20, "center", "semi pesadas", 10);
    menus[4].addItem("", "", 20, "center", "pesadas", 11);
    
    
    //Sub Menu for 1th Main Menu Item ("importadas"):
	menus[5] = new menu(180, "vertical", 0, 0, -2, -2, "ff9933", "ffffff", "Verdana,Helvetica", 8, "", "", "FFFFFF", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[5].addItem("importado_01.htm", "", 20, "center", "autobombas", 0);
	menus[5].addItem("escaleras.htm", "", 20, "center", "escaleras", 0);	
	menus[5].addItem("hidroelevadores.htm", "", 20, "center", "hidroelevadores", 0);
    

//Sub Menu for 1th Main Menu Item ("Eq Manual"):
	menus[6] = new menu(120, "vertical", 0, 0, -6, 2, "ffff00", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[6].addItem("cizalla.htm", "", 20, "left", "Cizalla", 0);	
	menus[6].addItem("separador.htm", "", 20, "left", "Separador", 0);
    menus[6].addItem("barreta.htm", "", 20, "left", "Barretas", 0);
	menus[6].addItem("multiproposito.htm", "", 20, "left", "Multipropósito", 0);
	menus[6].addItem("traba_airbag.htm", "", 20, "left", "Bloqueador de Airbag", 0);
	
	
	
	//Sub Menu for 1th Main Menu Item ("Varios"):
	menus[7] = new menu(160, "vertical", 0, 0, -20, 2, "ff9933", "ffffff", "Verdana,Helvetica", 8, "", "", "FFFFFF", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[7].addItem("", "", 20, "left", "Bombas", 14);	
	menus[7].addItem("", "", 20, "left", "Motobombas", 8);
    menus[7].addItem("mochilas_forestales.htm", "", 20, "left", "Mochilas Forestales", 0);
	menus[7].addItem("devanaderas.htm", "", 20, "left", "Devanaderas", 0);
	menus[7].addItem("", "", 20, "left", "Generadores", 0);
	menus[7].addItem("", "", 40, "left", "Compresores de Recarga", 0);
	menus[7].addItem("", "", 40, "left", "Balizamiento e Iluminación", 0);
	menus[7].addItem("", "", 40, "left", "Equipamiento para Bomberos", 13);
	

//Sub Menu for 1th Main Menu Item ("Motobombas"):
	menus[8] = new menu(120, "vertical", 0, 0, -6, 2, "ffff00", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[8].addItem("motobombas_alta.htm", "", 20, "left", "de alta", 0);	
	menus[8].addItem("motobombas_caudal.htm", "", 20, "left", "de caudal", 0);



//Sub Menu for 1th Main Menu Item ("Urbanas Livianas"):
	menus[9] = new menu(150, "vertical", 0, 0, -6, 2, "FFFF99", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[9].addItem("ford_4000_chevrolet_6150.htm", "", 35, "center", "Ford 4000 Chevrolet 6 150", 0);	
	menus[9].addItem("iveco_55_c16.htm", "", 20, "center", "Iveco 55-C16", 0);


//Sub Menu for 1th Main Menu Item ("Urbanas semi pesadas"):
	menus[10] = new menu(170, "vertical", 0, 0, -6, 2, "FFFF99", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[10].addItem("vw_150.htm", "", 20, "center", "Volkswagen VW 150", 0);	
	menus[10].addItem("mercedes_benz_710.htm", "", 20, "center", "Mercedes Benz 710", 0);


//Sub Menu for 1th Main Menu Item ("Urbanas pesadas"):
	menus[11] = new menu(170, "vertical", 0, 0, -6, 2, "FFFF99", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[11].addItem("ford_cargo_1722.htm", "", 20, "center", "Ford Cargo 1722", 0);	
	

//Sub Menu for 1th Main Menu Item ("Cisternas"):
	menus[12] = new menu(170, "vertical", 0, 0, -6, 2, "FFFF99", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[12].addItem("chevrolet_kodiac.htm", "", 20, "center", "Chevrolet Kodiac", 0);	


//Sub Menu for 1th Main Menu Item ("Indumentaria"):
	menus[13] = new menu(120, "vertical", 0, 0, -6, 2, "ffff00", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[13].addItem("indumentaria.htm", "", 20, "left", "Indumentaria", 0);	
	menus[13].addItem("incendio.htm", "", 20, "left", "Incendio", 0);
    menus[13].addItem("trauma.htm", "", 20, "left", "Trauma", 0);
    menus[13].addItem("rescate_altura.htm", "", 40, "left", "Rescate en altura", 0);
    menus[13].addItem("rescate_acuatico.htm", "", 40, "left", "Rescate acuático", 0);
    menus[13].addItem("herramientas_mano.htm", "", 40, "left", "Herramientas de mano", 0);


//Sub Menu for 1th Main Menu Item ("Indumentaria"):
	menus[14] = new menu(120, "vertical", 0, 0, -6, 2, "ffff00", "ffffff", "Verdana,Helvetica", 8, "", "", "000000", "cc3300", 1, "gray", 3, 62, false, true, false, true, 5, true, 4, 4, "gray");
	menus[14].addItem("bombas_chica.htm", "", 20, "left", "Chicas", 0);	
	menus[14].addItem("bombas_grande.htm", "", 20, "left", "Grandes", 0);
 




} //OUTER CLOSING BRACKET. EVERYTHING ADDED MUST BE ABOVE THIS LINE.






