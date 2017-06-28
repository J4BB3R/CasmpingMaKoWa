<?php

    /**
     *  Author: J4BB3R
     *  Date: 28/06/17
     *  Description: It's an PHP Class who implement blank const / var to build and print default page for MaKoWa
     *
    **/

    class Blank
    {
        // Build and Print Blank Page to the feed
        public function addBlank() {
            printf("<html>\n<head>\n".
                            self::blank_head."\n".
                            self::header_style."\n".
                            self::footer_style."\n".
                            "</head>\n<body>\n</body>\n</html>\n");
        }

        //-------------------------HEAD-----------------------------//

        const blank_head =  "<title>Cas'mping MaKoWa</title>\n".
                            "<meta charset=\"utf-8\">\n".
                            "<link rel=\"icon\" href=\"Pictures/favicon.png\">";

        const header_style = "<link rel=\"stylesheet\" href=\"CSS/header.css\">";

        const footer_style = "<link rel=\"stylesheet\" href=\"CSS/footer.css\">";


        //--------------------HEADER-NAVBAR--------------------------//

        const navbar_tabs_names = ["Accueil", "Nos Offres", "Réserver", "Contacts"];

        public $navbar_content= null;

        private function buildNavBar($returnStr) {
            $this->navbar_content = "<table>\n";
            foreach ($tab as $navbar_tabs_names) {
                $this->navbar_content = $this->navbar_content . "<td>" . $tab . "</td>";
            }
        }

}

?>
