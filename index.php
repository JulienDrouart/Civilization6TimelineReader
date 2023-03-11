<?php
    include("index.html");
    if(count($_FILES) > 0)
    {
        $content = file_get_contents($_FILES['file']['tmp_name']);
        $playersList = $content["Players"];
        /*
        "Civilization": "CIVILIZATION_FRANCE",
        "CivilizationDescriptionKey": "LOC_CIVILIZATION_FRANCE_DESCRIPTION",
        "CivilizationDescription": "Empire français",
        "CivilizationShortDescriptionKey": "LOC_CIVILIZATION_FRANCE_NAME",
        "CivilizationShortDescription": "France",
        "CivilizationAdjectiveKey": "LOC_CIVILIZATION_FRANCE_ADJECTIVE",
        "CivilizationAdjective": "français",
        "LeaderType": "LEADER_CATHERINE_DE_MEDICI",
        "LeaderNameKey": "LOC_LEADER_CATHERINE_DE_MEDICI_NAME",
        "LeaderName": "Catherine de Médicis"
        */
        
    }


?>