<?php
    $momentPerTour = array();
    if(count($_FILES) > 0)
    {
        $content = json_decode(file_get_contents($_FILES['file']['tmp_name']),true);
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

        /*
        [3] => Array
                (
                    [Id] => 13
                    [Type] => MOMENT_PLAYER_MET_MAJOR
                    [Turn] => 5
                    [GameEra] => ERA_ANCIENT
                    [EraScore] => 1
                    [ActingPlayer] => 2
                    [HasEverBeenCommemorated] => 
                    [InstanceDescription] => C'est un peuple curieux et sur ses gardes qui nous a accueillis quand nous avons rencontré l'Espagne pour la première fois.
                    [ExtraData] => Array
                        (
                            [0] => Array
                                (
                                    [Type] => -1493285436
                                    [Value] => 8
                                )

                        )
        */
        foreach($content["Moments"] as $moment)
        {
            $momentPerTour[$moment["Turn"]][] = $moment;
        }
    }
    

    function getDataByType($type)
    {
        $array = array(
            "MOMENT_FIND_NEW_CONTINENT_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_CITY_BUILT_NEAR_FLOODABLE_RIVER" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_CITY_BUILT_NEAR_VOLCANO" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_GOODY_HUT_TRIGGERED" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_BATTLE_FOUGHT" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_PLAYER_MET_MAJOR" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_BARBARIAN_CAMP_DESTROYED" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_FIND_NATURAL_WONDER_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_PLAYER_GAVE_ENVOY_BECAME_SUZERAIN_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_PANTHEON_FOUNDED_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_PANTHEON_FOUNDED" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_BARBARIAN_CAMP_DESTROYED_NEAR_YOUR_CITY" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_PLAYER_LEVIED_MILITARY" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_CAMPUS" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_UNIT_CREATED_FIRST_DOMAIN_SEA_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_HERO_CREATED_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_BUILDING_CONSTRUCTED_GAME_ERA_WONDER" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_CITY_BUILT_NEAR_OTHER_CIV_CITY" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_CITY_BUILT_NEW_CONTINENT" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_TECH_RESEARCHED_IN_ERA_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_ON_DISASTER_YIELD_TILE_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_GREAT_PERSON_CREATED_GAME_ERA" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_CITY_BUILT_ON_TUNDRA" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_GAME_ERA_STARTED_WITH_NORMAL_AGE" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_GAME_ERA_STARTED_WITH_DARK_AGE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_REQUIRING_STRATEGIC_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_PAST_ERA_WONDER" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_RELIGION_FOUNDED_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_1_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CIVIC_CULTURVATED_IN_ERA_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CIVIC_CULTURVATED_IN_ERA_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PLAYER_GAVE_ENVOY_CANCELED_LEVY" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_TRANSFERRED_PLAYER_DEFEATED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_1_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_DOMAIN_SEA" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_HARBOR" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_REQUIRING_STRATEGIC" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FIRST_INDUSTRY_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_HERO_EXPIRED_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_COMMERCIAL_HUB" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_TRADING_POST_CONSTRUCTED_IN_OTHER_CIV" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_HOLY_SITE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_SMALL_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_THEATER_SQUARE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GREAT_PERSON_CREATED_PATRONAGE_FAITH_OVER_HALF" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_FIRST_UNIQUE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_RELIGION_FOUNDED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_TECH_RESEARCHED_IN_ERA_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_SMALL_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FIND_NATURAL_WONDER" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GAME_ERA_STARTED_WITH_GOLDEN_AGE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FIRST_LUXURY_RESOURCE_MONOPOLY_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PLAYER_LEVIED_MILITARY_NEAR_ENEMY_CITY" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GREAT_PERSON_CREATED_PAST_ERA" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_SHIP_SUNK" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_HERO_CREATED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_BUILT_ON_DESERT" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_MEDIUM_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FIRST_INDUSTRY" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_MEDIUM_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_FIRST_UNIQUE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FIRST_LUXURY_RESOURCE_MONOPOLY" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_HIGH_ADJACENCY_INDUSTRIAL_ZONE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_UNIQUE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_KILLED_ASSISTED_BY_GENERAL" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_MITIGATED_RIVER_FLOOD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_CHANGED_RELIGION_ENEMY_CITY_DURING_WAR" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PLAYER_GAVE_ENVOY_CANCELED_SUZERAIN_DURING_WAR" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_HERO_EXPIRED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_2_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_LARGE_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PLAYER_MET_ALL_MAJORS_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_2_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_FIRST_UNIQUE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_CORPS_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_HERO_RECALLED_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_BUILT_NEAR_NATURAL_WONDER" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_LARGE_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_CORPS_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_NEIGHBORHOOD_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_TRANSFERRED_TO_ORIGINAL_OWNER" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_NEIGHBORHOOD_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_FULL_ENCAMPMENT_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_POWER_GENERATED_FROM_RESOURCE_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BELIEF_ADDED_MAX_BELIEFS_REACHED_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_HERO_RECALLED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_FLEET_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_ARMY_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNOR_FULLY_PROMOTED_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_DISTRICT_CONSTRUCTED_CANAL" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GAME_ERA_STARTED_WITH_HEROIC_AGE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_ARMY_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_POWER_GENERATED_FROM_RESOURCE_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_3_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNOR_ALL_APPOINTED_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_KILLED_UNDERDOG_MILITARY_FORMATION" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_WORLD_CIRCUMNAVIGATED_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BELIEF_ADDED_MAX_BELIEFS_REACHED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_3_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_BUILT_ON_SNOW" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_ARTIFACT_EXTRACTED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_EXTRA_LARGE_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_SEASIDE_RESORT_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_SPY_MAX_LEVEL_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_SIZE_EXTRA_LARGE_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PLAYER_MET_ALL_MAJORS" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_FULL_WATER_ENTERTAINMENT_COMPLEX_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_FULL_AERODROME_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_BUILDING_CONSTRUCTED_FULL_ENTERTAINMENT_COMPLEX_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_MOUNTAIN_TUNNEL_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_ROUTE_CREATED_RAILROAD_CONNECTS_TWO_CITIES_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_WORLD_CIRCUMNAVIGATED" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_ROUTE_CREATED_RAILROAD_CONNECTS_TWO_CITIES" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_MOUNTAIN_TUNNEL_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CLIMATE_CHANGE_PHASE" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_ARMADA_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_MANHATTEN" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_SATELLITE_LAUNCH_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_4_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_MOON_LANDING_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_MITIGATED_COASTAL_FLOOD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_DOMAIN_AIR_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_CREATED_FIRST_DOMAIN_AIR" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_SEASIDE_RESORT_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_OPERATION_IVY" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_GOVERNMENT_ENACTED_TIER_4_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_MARS_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_INQUISITION_LAUNCHED_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_ARTIFACT_EXTRACTED_SHIPWRECK_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_RENEWABLE_ENERGY_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_EXOPLANET_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_FLEET_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_SATELLITE_LAUNCH" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_IMPROVEMENT_CONSTRUCTED_RENEWABLE_ENERGY_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_KILLED_UNDERDOG_PROMOTIONS" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_FORMATION_ARMADA_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_EMERGENCY_WON_AS_MEMBER" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_TOURISM_BOMB_FIRST_IN_WORLD" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_CITY_TRANSFERRED_FOREIGN_CAPITAL" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_MOON_LANDING" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_UNIT_TOURISM_BOMB" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_MARS" => array("color" => "success","traduction" => "Découverte","icon" => "earth"),
            "MOMENT_PROJECT_FOUNDED_EXOPLANET" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_EMERGENCY_WON_AS_TARGET" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_UNIT_HIGH_LEVEL_FIRST" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_UNIT_KILLED_ASSISTED_BY_ADMIRAL" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe"),
            "MOMENT_UNIT_HIGH_LEVEL" => array("color" => "success","traduction" => "Découverte","icon" => "earth-europe")
        );
        if(isset($array[$type]))
        {
            return $array[$type];
        }else{
            return("unknown");
        }
    }

    function getEraById($eraId)
    {
        $array = array(
            "ERA_ANCIENT" => array("libelle" => "Ere ancienne","icon" => "house"),
            "MOMENT_CITY_BUILT_NEAR_FLOODABLE_RIVER" => array("libelle" => "Ere ancienne","icon" => ""),
            "MOMENT_CITY_BUILT_NEAR_VOLCANO" => array("libelle" => "Ere ancienne","icon" => ""),
            "MOMENT_GOODY_HUT_TRIGGERED" => array("libelle" => "Ere ancienne","icon" => ""),
        );

        if(isset($array[$eraId]))
        {
            return $array[$eraId];
        }else{
            return("unknown");
        }
    } 

    include("index.html");

?>