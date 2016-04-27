<?php
	// NavBar options
	define ('ABOUT' , 'Sobre ');
	define ('PILOTS' , 'Pilotos');
	define ('FLEET' , 'Frota');
	define ('ROUTES' , 'Rotas');
	define ('STAFF' , 'Staff');
	define ('SCHOOL' , 'Academia');
	define ('RULES' , 'Regulamento');
	define ('REGISTER' , 'Cadastre-se');
	define ('FORUM' , 'Fórum');
	define ('LANGUAGES' , 'Idioma');
	define ('LANGUAGE_ES' , 'Espanhol');
	define ('LANGUAGE_EN' , 'Inglês');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Francês'); 

	// NavBar options user logged
	define ('MENU' , 'D.O.V');
	define ('STATS' , 'Estatística');
	define ('ADMIN' , 'Administração');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Tripulantes  ');
	define ('CALLSIGN' , 'Callsign');
	define ('NAME' , 'Nome');
	define ('HUB' , 'Hub');
	define ('LOCATION' , 'Localização');
	define ('HOURS' , 'Horas');
	define ('RANK' , 'Patente');
	define ('COUNTRY' , 'País');
	define ('STATUS' , 'Estado');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');

	// Fleet list
	define ('FLEET_VA' , 'Frota');
	define ('FLEET_VA_LOC' , 'Frota em  ');
	define ('FLEET_VA_TYPE' , 'Tipo de Aeronave ');
	define ('REGISTRY' , 'Matrícula');
	define ('TYPE' , 'Tipo');
	define ('LOCATION_PLANE' , 'Localização');
	define ('STATUS_PLANE' , 'Estado');
	define ('HOURS_PLANE' , 'Horas');
	define ('NAME_PLANE' , 'Nome');
	define ('BOOKED_PLANE' , 'Reservado');
	define ('PLANE_FREE' , 'Livre');
	define ('PLANE_MAINTENANCE' , 'Em manutenção');
	define ('PLANE_BOOKED' , 'Reservado');
	define ('INFO_PLANE' , 'Informação');

	// Routes list
	define ('ROUTES_VA' , 'Rotas');
	define ('FLIGHT_VA' , 'Voo');
	define ('DEPARTURE' , 'Origem');
	define ('ARRIVAL' , 'Destino');
	define ('DEPARTURE_TIME' , 'Hora de partida');
	define ('ARRIVAL_TIME' , 'Hora de Chegada');
	define ('ROUTE_PLANE' , 'Tipo Aeronave');

	// Pilot Register form
	define ('REGISTER_FORM' , 'REGISTRO DE PILOTO');
	define ('PILOT_NAME_REG_FORM' , 'Nome:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Apelidos:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Data de nascimeto:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'País:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Idioma:');
	define ('PILOT_CITY_REG_FORM' , 'Cidade:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Senha:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirme a Senha:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Comentários:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Cadastrar');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Insira o Nome');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Insira o Apelido');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Insira a Data de Nascimento');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Insira o IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Insira o VATSIM ID');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Insira a Cidade');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Insira o Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Insira a Senha');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Insira o Comentario');
	define ('READ_RULES' , 'Concordo com os Termos');

	// Pilot Register Succesfull Page (index.php?page=pilot_insert)

	define ('REGISTER_SUCCESSFUL' , 'Registro correto');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Recebemos seu cadastro, ativaremos seu cadastro em até 24 horas!
Você receberá um email informando a ativação. (Caso não tenha recebido o email em até 24 horas, verifique sua caixa de SPAM!)');
	define ('REGISTER_CAPTCHA_MSG' , 'Captcha incorreto, tente novamente');	
	define ('REGISTER_WRONG' , 'Registro incorreto');
	define ('REGISTER_WRONG_MSG' , 'Email já cadastrado na base de dados.');
	define ('REGISTER_CLOSED_MSG' , 'No momento, as vagas para novos cadastros encontra-se fechada.');
	// Contraseña Recover
	define ('FORGOT_PASSWORD' , 'Esqueceu a Senha?');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Callsign:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Insira o Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Insira o Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Solicitar Senha');
	define ('PASSWORD_RESET_WRONG' , 'Resetar Senha');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Callsign ou email incorreto');
	define ('PASSWORD_RESET_OK' , 'Resetar Senha');
	define ('PASSWORD_RESET_OK_MSG' , 'Uma nova senha foi enviada para seu email.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'BEM VINDO A  ');

	define ('FLIGHT_NETWORKS' , 'REDES DE VOO');

	define ('TWEETS' , 'TWEETS');

	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'ÚLTIMOS VOOS');
	define ('LF_CALLSIG' , 'Callsign');
	define ('LF_PILOT' , 'Piloto');
	define ('LF_DEPARTURE' , 'Origem');
	define ('LF_ARRIVAL' , 'Destino');
	define ('LF_FLIGHTDATE' , 'Data');
	define ('LF_FLIGHTTIME' , 'Tempo de voo');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'ESTATÍSTICAS');
	define ('ST_NUMPILOTS' , 'Pilotos');
	define ('ST_NUMPLANES' , 'Aeronaves na Frota');
	define ('ST_NUMROUTES' , 'Rotas');
	define ('ST_NUMFLIGHTS' , 'Total de voos');
	define ('ST_NUMCHARTER' , 'Voos Charter');
	define ('ST_NUMREGULAR' , 'Voos Regular');
	define ('ST_PERREGULAR' , 'Voos Regular');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NOVOS PILOTOS');
	define ('NEWPILOT' , 'Piloto');
	define ('NEWJOINED' , 'Data');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Data');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'PRÓXIMOS EVENTOS');
	define ('EVENT_NAME' , 'Evento');
	define ('EVENT_DATE' , 'Data');
	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'NOTAM');
	define ('NOTAM_CREATE_DATE' , 'NOTAM - Data de criação');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM - Data de publicação');
	define ('NOTAM_TEXT' , 'Texto NOTAM');
	// EVENT table
	define ('EVENT' , 'EVENTO');
	define ('EVENT_NAME_PANEL' , 'Nome do evento');
	define ('EVENT_CREATE_DATE' , 'Data de criação');
	define ('EVENT_PUBLISH_DATE' , 'Data de publicação');
	define ('EVENT_TEXT' , 'Descrição do evento');
	// Pilot page
	define ('PILOT_PROFILE' , 'PERFIL');
	define ('PILOT_STATICS' , 'ESTATÍSTICAS PESSOAIS');
	define ('PILOT_CERTIFICATIONS' , 'CERTIFICACÃO DE AERONAVES');
	define ('PILOT_NAME' , 'Nome:');
	define ('PILOT_CALLSIGN' , 'Callsign:');
	define ('PILOT_COUNTRY' , 'País:');
	define ('PILOT_CITY' , 'Cidade:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Localização:');
	define ('PILOT_RANK' , 'Patente:');
	define ('PILOT_SALARY' , 'Salário por hora:');
	define ('PILOT_MONEY' , 'Dinheiro:');
	define ('PILOT_REGISTERDATE' , 'Data de registro:');
	define ('PILOT_FLIGHTS' , 'Total de Voos:');
	define ('PILOT_HOURS' , 'Horas Voadas:');
	define ('PILOT_FLIGHTSREGULAR' , 'Voos Regulares:');
	define ('PILOT_FLIGHTSCHARTER' , 'Voos Charter:');
	define ('PILOT_DISTANCE' , 'Distância:');
	define ('PILOT_PERFLIGHTREGULAR' , 'Voos Regulares:');
	define ('PILOT_MANUALREPORT' , 'Pireps manuais:');
	define ('PILOT_FSKEEPERREPORT' , 'Pireps FS Keeper:');
	define ('PILOT_FSACARSREPORT' , 'Pireps FS Acars:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars:');
	define ('PILOT_FLIGTH_MAP' , 'MAPA 10 ÚLTIMOS VOOS');
	define ('PILOT_FLIGTHS' , 'VOOS');
	define ('PILOT_FLIGTHS_DEP' , 'Origem');
	define ('PILOT_FLIGTHS_ARR' , 'Destino');
	define ('PILOT_FLIGTHS_DATE' , 'Data');
	define ('PILOT_FLIGTHS_DUR' , 'Duração');
	define ('PILOT_FLIGTHS_DIST' , 'Distância');
	define ('PILOT_FLIGTHS_TYPE' , 'Tipo');
	define ('PILOT_FLIGTHS_VALI' , 'Validação');
	define ('PILOT_FLIGTHS_DETAILS' , 'Detalhes');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'REGISTRO DE VOO');
	define ('FSACARS_PARAMETER' , 'Parâmetro');
	define ('FSACARS_VALUE' , 'Valor');
	define ('FSACARS_DEPARTURE' , 'Origem:');
	define ('FSACARS_ARRIVAL' , 'Destino:');
	define ('FSACARS_FLIGHTYPE' , 'Tipo de voo:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Regular');
	define ('FSACARS_STATUS_VALIDATED' , 'Aceito');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Validação Pendente');
	define ('FSACARS_STATUS_REJECTED' , 'Recusado');
	define ('FSACARS_STATUS' , 'Estado:');
	define ('FSACARS_DATE' , 'Data:');
	define ('FSACARS_DURATION' , 'Duração:');
	define ('FSACARS_PLANETYPE' , 'Tipo aeronave:');
	define ('FSACARS_FUEL' , 'Combustível:');
	define ('FSACARS_DISTANCE' , 'Distância:');
	define ('FSACARS_TOUCHDOWN' , 'VS Aterrissagem:');
	define ('FSACARS_LOG' , 'Log:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'REGISTRO DE VOO');
	define ('FSKEEPER_PILOT' , 'Piloto:');
	define ('FSKEEPER_AIRCRAFT' , 'Aeronave:');
	define ('FSKEEPER_DISTANCE' , 'Distância:');
	define ('FSKEEPER_DEPARTURE' , 'Origem:');
	define ('FSKEEPER_ARRIVAL' , 'Destino:');
	define ('FSKEEPER_TIME' , 'Duração:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Pista origem:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Origem TA:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Pista destino:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Destino TA:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Combustível total:');
	define ('FSKEEPER_FFUEL' , 'Combustível em voo:');
	define ('FSKEEPER_VALIDATED' , 'Estado de Validação:');
	define ('FSKEEPER_TYPE' , 'Tipo:');
	define ('FSKEEPER_REGISTRY' , 'Matrícula aeronave:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Regular');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Aceito');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Pendente de Validação');
	define ('FSKEEPER_STATUS_REJECTED' , 'Recusado');
	define ('FSKEEPER_PASSENGERS' , 'Passageiros:');
	define ('FSKEEPER_CARGO' , 'Carga:');
	define ('FSKEEPER_ALTERNATE' , 'Aeroporto alternativo:');
	define ('FSKEEPER_LANDVS' , 'VS aterrissagem:');
	define ('FSKEEPER_LANDIAS' , 'IAS aterrissagem:');
	define ('FSKEEPER_SCORE' , 'Pontuação do voo:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'ANÁLISE DE ATERRISSAGEM');
	define ('FSKEEPER_ROUTE' , 'ROTA');
	define ('FSKEEPER_CRITIQUE' , 'CRÍTICA FSKEEPER');
	define ('FSKEEPER_MAPS' , 'MAPAS DE VOO');
	// Pilot options
	define ('PILOT_ACTIONS' , 'CENTRAL');
	define ('OPTION_MAIL' , 'Comunicação Interna');
	define ('OPTION_ROUTE_RESERVE' , 'Reservar rota/voo');
	define ('OPTION_CHANGE_LOCATION' , 'Mudar de Localização');
	define ('OPTION_BANK' , 'Minhas Finanças');
	define ('OPTION_MANUAL_PIREP' , 'Envio de voo manual');
	define ('OPTION_PROFILE' , 'Perfil');
	define ('OPTION_STATS' , 'Estatísticas');
	define ('OPTION_VA_PARAMETER' , 'Parâmetros da  VA');
	define ('OPTION_DOWNLOADS' , 'Downloads');
	// VA Parameters
	define ('VA_PARAMETERS' , 'PARÂMETROS DA VA');
	define ('PARAMETER' , 'Parâmetro');
	define ('VALUE' , 'Valor');
	define ('COST_SHORT_JUMP' , 'Custo de troca de localização curto:');
	define ('COST_MEDIUM_JUMP' , 'Custo de troca de localização médio:');
	define ('COST_LONG_JUMP' , 'Custo de troca de localização grande:');
	define ('PLANE_STATUS_MAINTENANCE' , 'Aeronaves entram em manutenção com (%):');
	define ('LANDING_RATE_CRASH' , 'Velocidade vertical de aterrissagem elevada:');
	define ('STATUS_LOST_1' , 'Desgaste da aeronave com velocidade vertical de aterrissagem entre 0 ft/min y -');
	define ('STATUS_LOST_2' , 'Desgaste dA aeronave com velocidade vertical de aterrissagem -');
	define ('AND_STRING' , ' y -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Desgaste de aeronave por voo:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Duração de manutenção da aeronave:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Duração de reparação da aeronave:');
	define ('PENALTY_IN_CRASH' , 'Penalização em caso de acidente:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Salário por hora de voo em sua patente:');
	define ('SALARY_REDUCTION_CHARTER' , 'Porcentagem de redução de salário em casao de voo charter:');
	define ('DAYS' , ' dias');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'TRANSAÇÕES FINANCEIRAS');
	define ('BANK_DATE' , 'Data');
	define ('BANK_AMOUNT' , 'Quantidade');
	define ('BANK_REASON' , 'Trocar localização / voo');
	define ('BANK_TOTAL_MONEY' , 'Saldo: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'ROTAS DISPONÍVEIS EM SUA LOCALIZAÇÃO');
	define ('ROUTES_BOOKED' , 'ROTA E AERONAVE ATUALMENTE RESERVADA');
	define ('AVAILABLE_AIRCRAFT' , 'AERONAVES DISPONÍVEIS');
	define ('BOOK_ROUTE_FLIGHT' , 'Voos');
	define ('BOOK_ROUTE_DEPARTURE' , 'Origem');
	define ('BOOK_ROUTE_ARRIVAL' , 'Destino');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Alternativo');
	define ('BOOK_ROUTE_TIME_DEP' , 'Saída');
	define ('BOOK_ROUTE_TIME_ARR' , 'Chegada');
	define ('BOOK_ROUTE_INFORMATION' , 'Informação');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Tipo Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Matrícula Aeronave ');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Estado Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Aeronave Reservada');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Aeronave Reservada');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Cancelar Reserva');
	define ('BOOK_ROUTE_CANCEL' , ' Cancelar');
	define ('BOOK_ROUTE_CONFIRM' , 'Reserva confirmada. A reserva será cancelada em 24 horas.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMAÇÃO');
	// Change Location
	define ('LOCATION_CHANGE' , 'TROCA DE LOCALIZAÇÃO');
	define ('LOCATION_CHANGE_LOCATION' , 'Localização:');
	define ('LOCATION_CHANGE_BTN' , 'Trocar');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'PIREP MANUAL ');
	define ('MANUAL_PIREP_DATE' , 'Data:');
	define ('MANUAL_PIREP_DATE_PH' , 'Insira a Data');
	define ('MANUAL_PIREP_DEP' , 'Origem:');
	define ('MANUAL_PIREP_DEP_PH' , 'Insira Origem');
	define ('MANUAL_PIREP_ARR' , 'Destino:');
	define ('MANUAL_PIREP_ARR_PH' , 'Insira Destino');
	define ('MANUAL_PIREP_TIME' , 'Tempo de voo:');
	define ('MANUAL_PIREP_TIME_PH' , 'Insira Tempo de voo');
	define ('MANUAL_PIREP_DISTANCE' , 'Distância:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Insira Distância');
	define ('MANUAL_PIREP_FUEL' , 'Combustível:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Insira Combustível');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Aeronave:');
	define ('MANUAL_PIREP_COMMENT' , 'Comentarios:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Insira Comentarios');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Tipo de voo:');
	define ('MANUAL_PIREP_REG' , 'Regular');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Reportar');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Edit');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Cancelar');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirmar');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'VOOS REALIADOS POR AERONAVE COM MATRÍCULA  ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Data');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Piloto');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Voos');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Origem');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Destino');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distância');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Combustível');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'TROCA DE LOCALIZAÇÃO');
	define ('CHANGE_LOCATION_ICAO' , 'Aeroporto (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Trocar');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MEU PERFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Atualizar');
	define ('MY_PROFILE_UPDATED' , 'Seu perfil foi atualizado!');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'COMUNICAÇÃO INTERNA');
	define ('MAILS_NEW' , 'NOVA MENSAGEM');
	define ('MAILS_REPLY' , 'RESPOSTA A MENSAGEM');
	define ('MAILS_DATE' , 'Data');
	define ('MAILS_FROM' , 'De');
	define ('MAILS_SUBJECT' , 'Assunto');
	define ('MAILS_SUBJECT_PH' , 'Escreva um assunto');
	define ('MAILS_ACTIONS' , 'Ação');
	define ('MAILS_NEW_MESSAGE_LNK' , ' Nova Mensagem');
	define ('MAILS_NEW_TO' , 'Para');
	define ('MAILS_MESSAGE' , 'Mensagem');
	define ('MAILS_MESSAGE_PH' , 'Escreva a mensagem');
	define ('MAILS_SEND_BTN' , 'Enviar');
	// STATISTICS

	define ('STATISTICS' , 'ESTATÍSTICAS');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'PORCENTAGEM CHARTER & REGULAR');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'PORCENTAGEM POR TIPO DE REPORTE');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'PORCENTAGEM POR TIPO DE AERONAVE');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'NÚMERO DE VOOS POR DIA NO MÊS ATUAL');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 PILOTOS POR HORAS');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 PILOTOS POR VOO');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 LANDINGS');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 ROUTAS');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Piloto');
	define ('STATISTICS_HOURS' , 'Horas');
	define ('STATISTICS_FLIGHTS' , 'Voos');
	define ('STATISTICS_TOUCH' , 'Toque (ft/min)');
	define ('STATISTICS_ROUTE' , 'Rota');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manual');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Regular');
	define ('INDEX_PILOT_CHARTER' , 'Charter');
	define ('INDEX_PILOT_COMMENT' , 'Comentário');
	// User not recognized

	define ('INDEX_NO_USER' , 'Sessão encerrada. Usuário ou Senha não é válido');
	// Administration options
	define ('ADM_PARA' , 'Configurações da VA');
	define ('ADM_HUB_MGR' , 'Gerenciameto de HUB');
	define ('ADM_FLEET_TYPE_MGR' , 'Tipo de Frota');
	define ('ADM_FLEET_MGR' , 'Gerenciamento de Frota');
	define ('ADM_PILOT_RANK_MGR' , 'Gerenciamento de Patente');
	define ('ADM_PILOT_MGR' , 'Gerenciamento de Pilotos');
	define ('ADM_ROUTE_MGR' , 'Gerenciamento de Rotas');
	define ('ADM_ROUTE_FLEET_MGR' , 'Associação de Rotas');
	define ('ADM_USER_TYPE_MGR' , 'Tipo de Usuário');
	define ('ADM_JUMP_MGR' , 'Validar JUMPSEAT');
	define ('ADM_FLIGHT_MGR' , 'Validador de Voo');
	define ('ADM_NOTAM_MGR' , 'Gerenciamento de NOTAMs');
	define ('ADM_EVENT_MGR' , 'Gercianmento de Eventos');
	define ('ADM_EMAIL_MGR' , 'Gerenciamento de Emails');
	define ('ADM_LANGUAGES_MGR' , 'Gerenciamento de Idioma');
	define ('ADM_ACARS_MGR' , 'ACARS Parâmetros');
	define ('ADM_NEW_MODULE_MGR' , 'Novo Modulo');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'VALIDAÇAO DE VOOS');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Origem');
	define ('VALIDATE_ARRIVAL' , 'Destino');
	define ('VALIDATE_DATE' , 'Data');
	define ('VALIDATE_DURATION' , 'Duracão');
	define ('VALIDATE_DISTANCE' , 'Distância');
	define ('VALIDATE_TYPE' , 'Tipo');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Regular');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Ação');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Voo Regular ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Voo Charter ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'VALIDAÇÃO DE JUMPSEAT');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Origem');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Destino');
	define ('VALIDATE_JUMP_DATE' , 'Data');
	define ('VALIDATE_JUMP_JUMP1' , 'Salto tipo 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Salto tipo 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Salto tipo 3');
	define ('VALIDATE_JUMP' , 'Salto ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'REPORTE VAM ACARS');
	define ('VAMACARS_FLITGH_DETAILS' , 'ANÁLISE DO VOO');
	define ('VAMACARS_LANDANALYSIS' , 'ANÁLISE DA ATERRISSAGEM');
	define ('VAMACARS_ROUTE' , 'ROTA');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETALHES');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validação');
	define ('VAMACARS_STATUS_VALIDATED' , 'Aceito');
	define ('VAMACARS_STATUS_REJECTED' , 'Recusado');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Pendente de Validação');
	define ('VAMACARS_TYPE' , 'Tipo');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Matrícula');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Consumo total');
	define ('VAMACARS_FFUEL' , 'Consumo em voo');
	define ('VAMACARS_PASSENGERS' , 'Pasageiros');
	define ('VAMACARS_CARGO' , 'Carga');
	define ('VAMACARS_ALTERNATE1' , 'Alternativo');
	define ('VAMACARS_WEIGHTUNIT' , 'Unidades de peso');
	define ('VAMACARS_DATE' , 'DATA');
	define ('VAMACARS_DEPARTURE' , 'Origem');
	define ('VAMACARS_ARRIVAL' , 'Destino');
	define ('VAMACARS_DURATION' , 'Duração');
	define ('VAMACARS_DISTANCE' , 'Distância');
	define ('VAMACARS_DEP_TIME' , 'Hora saída');
	define ('VAMACARS_CRUISE_SPEED' , 'Velocidade de cruzeiro');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Nivel de voo');
	define ('VAMACARS_FLIGHT_TYPE' , 'Tipo de voo');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Tipo de aeronave');
	define ('VAMACARS_COMMENTS' , 'Comentários do piloto');
	define ('VAMACARS_NETWORK' , 'Red');
	define ('VAMACARS_DATEDETAIL' , 'Data');
	define ('VAMACARS_FUELCONSUMED' , 'Combustível CONSUMIDO');
	define ('VAMACARS_LANDING_PITCH' , 'Cabeceo');
	define ('VAMACARS_LANDING_BANK' , 'Alabaeo');
	define ('VAMACARS_LANDING_FLAPS' , 'Flaps');
	define ('VAMACARS_LANDING_FORCEG' , 'Fuerza G');
	define ('VAMACARS_LANDING_NAV' , 'Navigation Lights');
	define ('VAMACARS_LANDING_LDG' , 'Landing Lights');
	define ('VAMACARS_LANDING_STR' , 'Strobe Lights');
	define ('VAMACARS_LANDING_BEA' , 'Beacon Lights');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUDE');
	define ('VAMACARS_FUEL_USED' , 'Combustível UTILIZADO');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FASE DO VOO');
	define ('VAMACARS_VAM_MAP' , 'MAPA DE VOO');
	define ('VAMACARS_EVENTS' , 'EVENTO');
	define ('VAMACARS_MAIN_EVENTS' , 'PRINCIPAIS EVENTOS');
	
	define ('VAMACARS_ACARS_DATA' , 'DATAS ACARS');
	define ('VAMACARS_HEADING' , 'RUMO');
	define ('VAMACARS_FLIGHT_STATUS' , 'FASE DE VOO');
	define ('VAMACARS_CRITICAL_EVENTS' , 'EVENTOS CRÍTICOS');
	define ('VAMACARS_VAM_CHART' , 'GRÁFICO DE ALTITUDE');

	// Downloads
	define ('DOWNLOADS' , 'DOWNLOADS');
	define ('DOWNLOAD_NAME' , 'NOME');
	define ('DOWNLOAD_LINK' , 'LINK');

	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'COMENTARIOS DE VALIDACIÓN');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMENTARIO');
	define ('VAMACARS_FLIGHT_RATING' , 'Calificación del voo');
	define ('VAMACARS_CRASH' , 'Accidente');	
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Comentarios del validador');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Añadir comentario');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Aceptar');
	define ('VAMACARS_VALIDATION_REJECT' , 'Rechazar');	
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Si');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Fallo');	
	define ('VAMACARS_FLIGHTFAILURES' , 'FALLOS DE voo');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Motores encendidos');
	define ('VAMACARS_IAS1000' , 'KIAS mayor 250 debajo 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Luces OFF debajo 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Luces ON por encima 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Pausa');
	define ('VAMACARS_REFUEL' , 'Refueling');
	define ('VAMACARS_SLEW' , 'Slew detectado');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi con luces de taxi OFF');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Depegue con Landing lights OFF');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Aterrizaje con Landing lights OFF');
	define ('VAMACARS_NOTARRIVED' , 'Aterrizaje en aeropuerto no planeado');
	define ('VAMACARS_NUMFAILURES' , 'Númerod de fallos');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'COMENTARIOS DEL VALIDADOS');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Comentarios del validador:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validación:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Fechas de validación:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Aceptado');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Pendiente de validación');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rechazado');
	

	// VAM 2.4 BEGIN

	define ('AIRPORT_AIRPORT_METAR' , 'INFORMACIÓN METAR y TAF');
	define ('AIRPORT_AIRPORT_MAP' , 'MAPA DE AEROPUERTO');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'FRECUANCIAS DEL AEROPUERTO');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'RADIO AYUDAS DEL AEROPUERTO');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Tipo');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Nombre');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frecuencia');
	define ('AIRPORT_RUNWAY_INFO' , 'INFORMACIÓN DE PISTA');
	define ('AIRPORT_RUNWAY' , 'Pista');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Longitud');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Ancho');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Elevación');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Umbral desplazado');
	define ('AIRPORT_RUNWAY_HEADING' , 'Rumbo de pista');
	define ('BOOK_ROUTE_INFO' , 'INFORMACIÓN DE RUTA');
	define ('BOOK_ROUTE_DURATION' , 'Duración');
	define ('BOOK_ROUTE_ROUTE' , 'Ruta');
	define ('BOOK_ROUTE_PRICE' , 'Precio');
	define ('BOOK_ROUTE_COMMENTS' , 'Comentarios');
	define ('ROUTES_VA_SEARCHER', 'Buscador de rutas');
	define ('VAMACARS_VALIDATION_DELETE','Borrar voo');
	define ('PILOT_RECEIVE_EMAILS','Quieres recibir emails?');

	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'DETALHES DA AERONAVE');
	define ('AIRCRAFT_DETAILS_PAX' , 'Número de passageiros');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Autonomia');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Capacidade carga');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Comprimento da aeronave');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Velocidade cruzeiro');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Máxima altitude');
	define ('AIRCRAFT_DETAILS_CREW' , 'Tripulação');
	define ('HUB_DETAILS' , 'DETALHES DO HUB');
	define ('HUB_PILOTS' , 'PILOTOS DO HUB');
	define ('HUB_FLEET' , 'FROTA DO HUB');
	define ('HUB_ROUTES' , 'ROTAS DO HUB');
	define ('HUB_MAP_LOCATION' , 'MAPA DE ROTAS');
	define ('HUB_NAME' , 'Nome');
	define ('HUB_WEB' , 'Web');
	define ('HUB_NUM_PILOTS' , 'Número de pilotos');
	define ('HUB_NUM_FLEET' , 'Número de aeronaves');
	define ('HUB_NUM_ROUTES' , 'Número de rotas');
	define ('ADM_TOUR_MODULE_MGR' , 'Gestor de Rotas');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Gestor financeiro');
	define ('OPERATIONS' , 'Operações');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Patente do piloto');
	define ('AWARDS' , 'Medalhas');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'TOURS ATIVOS');
	define ('TOURS_INACTIVE' , 'TOURS INATIVOS');
	define ('TOUR_DETAILS' , 'DETALHES DO TOUR');
	define ('TOUR_LEGS' , 'ETAPAS DO TOUR');
	define ('TOURS_STATUS' , 'Estado');
	define ('TOURS_AWARD' , 'Medalha');
	define ('TOURS_IMAGE' , 'Imagem');
	define ('TOURS_NUM_LEGS' , 'Num. Etapas');
	define ('TOURS_LEG_STATUS' , 'Estado da etapa');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Num. etapas aceitas');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Num. etapas reportadas');
	define ('TOURS_LEGS_REPORT' , 'Reportar etapa');
	define ('TOURS_DISTANCE' , 'Distância');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Data inicio');
	define ('TOURS_END_DATE' , 'Data fim');
	define ('TOURS_ROUTE_INFO' , 'Rota e comentários');
	define ('TOURS_ROUTE' , 'Rota');
	define ('TOURS_COMMENTS' , 'Comentários');
	define ('TOURS_LEG_REPORT' , 'Reportar etapa');
	define ('TOURS_VALIDATION' , 'VALIDAÇÃOD E ETAPAS DO TOUR');
	define ('TOURS_LEG' , 'Etapa');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Imagem do piloto');
	define ('PILOT_AWARDS' , 'MEDALHAS DO PILOTO');
	define ('PILOT_TOURS' , 'TOURS DO PILOTO');
	define ('ADM_AWARDS_MGR' , 'Gestor de Medalhas');
	define ('ADM_AWARDS_PILOR_MGR' , 'Asignación medallas');
	
	define ('VAMACARS_LANDINGQNH' , 'Calado incorrecto en aterrizaje');
	define ('VAMACARS_TAKEOFFQNH' , 'Calado incorrecto en despegue');
	define ('LAND_WIND' , 'Viento en aterrizaje');
	define ('LAND_HDG' , 'Rumbo en aterrizaje');
	define ('OPTION_TOUR' , 'Reportar etapa');
	define ('AWARDS_PANEL' , 'MEDALLAS');
	define ('AWARD_NAME' , 'Medalla');
	define ('AWARD_IMG' , 'Imagen de Medalla');
	define ('RANK_PANEL' , 'RANGOS');
	define ('RANK_IMAGE' , 'Imagen de Rango');
	define ('RANK_MIN_HOURS' , 'Mínimo de horas del rango');
	define ('RANK_MAX_HOURS' , 'Máximo de horas del rango');
	// NEW STATS
	define ('ST_MONTH' , 'Mes');
	define ('ST_YEAR' , 'Año');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HORAS POR AÑO Y MES');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'vooS POR AÑO Y MES');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 vooS POR TIPO DE AERONAVE');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 vooS POR  DE AERONAVE');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'REPORTE FINANCIERO DEL voo');
	define ('VA_GLOBAL_FINANCES' , 'REPORTE FINANCIERO GLOBAL');
	define ('COSTS' , 'COSTES');
	define ('INCOME' , 'INGRESOS');
	define ('INCOME_REGULAR_ROUTES' , 'INGRESOS RUTAS REGULARES');
	define ('AIRCRAFT_PURCHASE' , 'COMPRA DE AERONAVES');
	define ('FINANCE_BALANCE' , 'BALANCE FINANCIERO');
	define ('GLOBAL_FINANCES' , 'Reporte financiero');
	define ('COSTS_PILOTS_SALARY' , 'COSTES SALARIALES');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTES REPARACIÓN AERONAVES');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTES MANTENIMIENTO AERONAVES');	
	// LIVE MAP	
	define ('FLIGHT_STAGE' , 'Estado voo');
	define ('PERC_DONE' , '% Completado');
	define ('PENDING_NM' , 'Pendiente NM');
	
?>