<?php
/**
 * French language file
 *
 * It is a mapping from a descriptor string to a display string.
 */

$mapping = array(
	'adsync:invalid_command'									=> "Commande invalide : %s.",
	'adsync:invalid_invocation_missing_command'					=> "Appel invalide : Commande absente",
	'adsync:invalid_invocation_missing_target'					=> "Appel invalide : Cible absente",
	'adsync:invalid_invocation_missing_userid'					=> "Appel invalide : ID utilisateur absent",
	'adsync:invalid_invocation_missing_building_dn'			    => "Appel invalide : Nom distinctif d'immeuble absent",
	'adsync:invalid_invocation_wrong_data_type'					=> "Appel invalide : teaminfo_data devrait être une matrice",
	'adsync:invalid_invocation_wrong_data_type_empty_array'		=> "Appel invalide : elgg_data devrait être une matrice vide",
	'adsync:invalid_invocation_array_is_empty'					=> "Appel invalide : la matrice elgg_data est vide",
	'adsync:invalid_invocation_missing_elgg_user'				=> "Appel invalide : elgg_user devrait être un objet utilisateur valide ",
	'adsync:invalid_invocation_admin_only_function'				=> "Appel invalide : Seul un administrateur peut appeler cette fonction",
	'adsync:invalid_invocation_permission_denied'				=> "Appel invalide : Seul un administrateur et le propriétaire du profil peuvent appeler cette fonction",
	'adsync:no_record_found_in_teaminfo'						=> "Aucun enregistrement dans monÉquipe pour cet utilisateur : %s.",
	'adsync:not_implemented'									=> "Fonction non implémentée.",
	'adsync:pull_failed'										=> "Échec de l'extraction.",
	'adsync:pull_completed'										=> "Extraction réussie.",
	'adsync:getavatar_failed'										=> "Échec de l'obtention de l'avatar monÉquipe.",
	'adsync:getavatar_completed'										=> "Obtention de l'avatar monÉquipe réussie.",
	'adsync:mssql_connection_failed'							=> "Impossible de se connecter au serveur !",
	'adsync:mssql_error'										=> "Erreur SQL : %s",
	'adsync:bilingual_en'										=> "Bilingue (anglais d'abord)",
	'adsync:bilingual_fr'										=> "Bilingue (français d'abord)",
	'adsync:english_only'										=> "Anglais seulement",
	'adsync:french_only'										=> "Français seulement",
	'adsync:pulldata'											=> "Actualiser les données",
	'adsync:getavatar'											=> "Extraction de l'avatar monÉquipe",
	'adsync:config:title'										=> "Configuration",
	'adsync:actions:title'										=> "Actions",
	'adsync:settings:label:profile_section'						=> "Profil",
	'adsync:settings:label:profile_type_id'						=> "ID de type de profil",
	'adsync:settings:help:profile_type_id'						=> "Taper l'ID de type de profil, par exemple <i>'16342'</i>. L'ID numérique du type de profil à attribuer aux utilisateurs est disponible en passant la souris sur les gears pour ce type de profil - l'ID fera partie du URL.",
	'adsync:settings:label:teaminfo_section'					=> "monÉquipe",
	'adsync:settings:label:teaminfo_server'						=> "Serveur pour monÉquipe",
	'adsync:settings:help:teaminfo_server'						=> "Adresse IP ou nom du serveur pour monÉquipe",
	'adsync:settings:label:teaminfo_url'						=> "URL pour monÉquipe",
	'adsync:settings:help:teaminfo_url'							=> "Taper l'URL pour extraire les données de monÉquipe, par exemple <i>'http://10.4.32.31/monÉquipe'</i>. Le chemin et le nom d'utilisateur seront ajoutés à l'URL pour former l'URL définitif tel que <i>'http://10.4.32.31/monÉquipe/Handler/ReadFile.ashx?dfaitEdsId=routies'</i>.",
	'adsync:settings:label:teaminfo_domain'						=> "Domaine utilisateur monÉquipe",
	'adsync:settings:help:teaminfo_domain'						=> "Taper le nom de domaine de l'utilisateur pour accéder à monÉquipe, par exemple <i>'SIGNET'</i>.",
	'adsync:settings:label:teaminfo_username'					=> "Nom d'utilisateur monÉquipe",
	'adsync:settings:help:teaminfo_username'					=> "Taper le nom d'utilisateur pour accéder à monÉquipe, par exemple <i>'ibtestuser1'</i>.",
	'adsync:settings:label:teaminfo_password'					=> "Mot de passe pour monÉquipe",
	'adsync:settings:help:teaminfo_password'					=> "Taper le mot de passe de l'utilisateur pour accéder à monÉquipe, par exemple <i>'Password1'</i>.",
	'adsync:actions:pull_all'									=> "Tout extraire",
	'adsync:actions:pull_all:description'						=> "Extraire tous les profils utilisateurs depuis Active Directory",
	'adsync:actions:pull_all:confirm'							=> "Voulez-vous vraiment extraire *tous* les profils utilisateurs d'Active Directory? Cette opération peut durer quelques heures.",

	
	'adsync:profile_completeness'								=> "Profil complet",
	'adsync:edit_teaminfo'										=> "Modifier monÉquipe",
	'adsync:settings:label:profile_default_value'				=> "Valeur implicite du champ",
	'adsync:settings:help:profile_default_value'				=> "Taper la valeur implicite à utiliser si monÉquipe n'a aucune valeur, ou laisser vide pour ne préciser une valeur implicite. <br/> NOTE : Préciser une valeur implicite affectera le rapport d'intégralité des profils.",
	'adsync:settings:label:ldap_section'						=> "LDAP",
	'adsync:settings:label:ldap_server'							=> "Nom de l'hôte",
	'adsync:settings:help:ldap_server'							=> "Taper la forme canonique du nom de l'hôte pour votre serveur LDAP, par exemple <i>ldap.yourcompany.com</i>",
	'adsync:settings:label:ldap_server_port'					=> "Port",
	'adsync:settings:help:ldap_server_port'						=> "Le port du serveur LDAP. La valeur implicite <i>'389'</i> est celle utilisé par la plupart des hôtes.",
	'adsync:settings:label:ldap_proto_version'					=> "Version du protocole",
	'adsync:settings:help:ldap_proto_version'					=> "Version du protocole LDAP. La valeur implicite <i>'3'</i> est celle utilisée par la plupart des hôtes LDAP actuels.",
	'adsync:settings:label:ldap_bind_dn'						=> "Nom distinctif (DN) d'authentification",
	'adsync:settings:help:ldap_bind_dn'							=> "Quel DN utiliser pour s'authentifier auprès du serveur LDAP, par exemple <i>'cn=admin,dc=yourcompany,dc=com'</i>",
	'adsync:settings:label:ldap_bind_password'					=> "Mot de passe d'authentification",
	'adsync:settings:help:ldap_bind_password'					=> "Quel mot de passe utiliser pour s'authentifier auprès du serveur LDAP.",
	'adsync:settings:label:ldap_field_mapping'					=> "Correspondance des champs",
	'adsync:settings:help:ldap_field_mapping'					=> "Taper une série de paires de clés et de valeurs, séparées par des virgules. La clé correspond au champ du profil utilisateur Elgg et la valeur, l'attribut LDAP à utiliser pour remplir le champ du profil. L'exemple qui suit fonctionne avec MS ActiveDirectory:<br/> <blockquote><i>firstname:givenname, lastname:sn, mail:mail</i></blockquote>",
	'adsync:settings:label:ldap_create_user'					=> "Création des utilisateurs",
	'adsync:settings:help:ldap_create_user'						=> "Le compte utilisateur peut aussi être créé lorsqu'un nouvel utilisateur est créé dans l'annuaire LDAP.",
	'profile:categories:WorkInformationUserFields'				=> "Renseignements sur le travail",
	'profile:categories:PhoneBookTitleUserFields'				=> "Poste dans l'annuaire",
	'profile:categories:PhoneNumbersUserFields'					=> "Numéros de téléphone",
	'profile:categories:ContactPrefUserFields'					=> "Préférences pour les coordonnées",
	'profile:categories:BuildingInfoUserFields'					=> "Renseignements sur l'immeuble",
	'profile:categories:OtherInfoUserFields'					=> "Autres renseignements",
	'profile:categories:AdminOnlyUserFields'					=> "Pour administrateur uniquement",
	'profile:org_label_en'										=> "Organisation en anglais",
	'profile:org_label_fr'										=> "Organisation en français",
	'profile:employee_type'										=> "Type d'employé",
	'profile:manager_name'										=> "Gestionnaire",
	'profile:title_english'										=> "Poste en anglais",
	'profile:title_french'										=> "Poste en français",
	'profile:phone_mitnet_business'								=> "MITNET/Bureau",
	'profile:phone_external'									=> "Numéro de téléphone à l'externe",
	'profile:phone_alternate'									=> "Autre numéro de téléphone",
	'profile:phone_secure'										=> "Numéro de téléphone protégé",
	'profile:phone_mobile'										=> "Numéro de téléphone cellulaire",
	'profile:phone_assistant'									=> "Numéro de téléphone de l'assistant",
	'profile:name_assistant'									=> "Nom de l'assistant",
	'profile:phone_pager'										=> "Téléavertisseur",
	'profile:phone_mitnet_fax'									=> "Télécopieur MITNET",
	'profile:phone_secure_fax'									=> "Télécopieur protégé",
	'profile:phone_home_1'										=> "Numéro de téléphone au domicile 1",
	'profile:phone_home_2'										=> "Numéro de téléphone au domicile 2",
	'profile:phone_private_mobile'								=> "Numéro de téléphone cellulaire privé",
	'profile:salutation'										=> "Appel",
	'profile:pref_lang'											=> "Langue de choix",
	'profile:note'												=> "Note",
	'profile:building_name'										=> "Immeuble",
	'profile:building_address'									=> "Adresse de l'immeuble",
	'profile:room'												=> "Pièce",
	'profile:languages'											=> "Langues",
	'profile:current_areas'										=> "Secteurs<br>de responsabilité",
	'profile:former_areas'										=> "Secteurs<br>de responsabilité précédents",
	'profile:Interests'											=> "Intérêts",
	'profile:special_projects'									=> "Projets particuliers",
	'profile:skills'											=> "Compétences",
	'profile:website'											=> "Site Web",
	'profile:twitter'											=> "ID Twitter",
	'profile:org_dn'											=> "Nom distinctif (DN) de l'organisation",
	'profile:user_dn'											=> "DN de l'utilisateur",
	'profile:manager_dn'										=> "DN du gestionnaire",
	'profile:manager_dfaitedsid'								=> "ID du gestionnaire",
	'profile:teaminfo_pic_hash'									=> "Condensé numérique de photo de monÉquipe",
	'adsync:hierarchy'											=> "Hiérarchie",
	'adsync:teammates'											=> "Coéquipiers",
	'adsync:org_members'										=> "Membres de l'organisation",
	
);

// this is the English mapping
add_translation('fr', $mapping);
