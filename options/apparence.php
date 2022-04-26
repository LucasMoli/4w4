<?php  
/*
Ajout dune fonction de personnalisation en utilisant la classe wp_custimiser
Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
La fonction de rappel : function(WP_Customizer, $manager)

*/

add_action('customize_register', function(WP_Customize_Manager $manager){
    $manager->add_section("apparence_body", 
                            [
                                "title"=>"Apparence body"
                            ]);
    $manager->add_setting('background_body',
                            ["default"=>"#ffffff",
                            "sanitize_callback"=>"sanitize_hex_color"
                            ]);// permet de valider/filtrer la donnée
    $manager->add_control('background_body',
                            ["section"=>"apparence_body",
                            "setting"=>"background_body",
                            "label"=>"La couleur du background body"]);
});
 /* 
  La méthode add_section( id de la section,
                           [
                               "title" => "Le titre de la section"
                           ]);
  La méthode add_setting ( Le nom de la variable php qui sera utilisée dans notre thème,
                            [   "default" => la valeur par défaut de la variable,
                                "sanitize_callback"=> "sanitize_hex_color" 
                            ]);   
 
  La méthode add_control ( le nom de la variable php qui sera utilisé dans notre thème,
                            ["section"=> le ID de la section,
                             "setting"=> le nom de la variable,
                             "label"=> l'étiquette de la variable dans le formulaire 
                             ])                          
 
  Pour utiliser une interface de couleur plus complexe on peut utiliser 
  La méthode add_control (new WP_Customize_Color_Control($manager, le nom de la variable php,
                        ["section"=>"le ID de la section",
                        "label"=>l'étiquette de la variable dans le formulaire  ]));

                        
*/
?>