<?php

namespace classes\Field;
require_once "Classes/Field/FieldCell.php";
use classes\Field\FieldCell;
class FieldCells
{
    public array $cells;
    public function __construct()
    {
        $this->cells=[
            "start" => new FieldCell(
                html: <<<'START'
    <div class="monopoly_card angle" id="start">
                <div class="card_symbol">
    🏁
        </div>
    </div>
START
            ),
            "mediterranean" => new FieldCell(
                html: <<<MEDITERRANEAN
    <div class="monopoly_card bottom_line" id="mediterranean">
        Mediterranean ave.
        <div class="card_container">

        </div>
        ￦60
    </div>
MEDITERRANEAN
            ),
            "chest3" => new FieldCell(
                html: <<<CHEST3
    <div class="monopoly_card bottom_line" id="chest3">
        Community chest
        <div class="card_container">
            <div class="card_symbol">
                🎁
            </div>
        </div>
    </div>
CHEST3
            ),
            "baltic" => new FieldCell(
                html: <<< BALTIC
    <div class="monopoly_card bottom_line" id="baltic">
        Baltic ave.
        <div class="card_container">

        </div>
        ￦60
    </div>
BALTIC

            ),
            "income_tax" => new FieldCell(
                html: <<< INCOME_TAX
    <div class="monopoly_card bottom_line" id="income_tax">
        Income tax
        <div class="card_container">
            <div class="card_symbol">
                💰
            </div>
        </div>
        Pay ￦200
    </div>
INCOME_TAX
            ),
            "reading_rail" => new FieldCell(
                html: <<<READING_RAIL
    <div class="monopoly_card bottom_line" id="reading_rail">
        Reading Railroad
        <div class="card_container">
            <div class="card_symbol">
                🚂
            </div>
        </div>
        ￦200
    </div>
READING_RAIL
            ),
            "oriental" => new FieldCell(
                html:<<<ORIENTAL
    <div class="monopoly_card bottom_line" id="oriental">
        Oriental ave.
        <div class="card_container">

        </div>
        ￦100
    </div>
ORIENTAL
            ),
            "chance_pur" => new FieldCell(
                html:<<<CHANCE_PUR
    <div class="monopoly_card bottom_line" id="chance_pur">
        Chance
        <div class="card_container">
            <div class="card_symbol">
                ❓
            </div>
        </div>
    </div>
CHANCE_PUR
            ),
            "vermont" => new FieldCell(
                html:<<<VERMONT
    <div class="monopoly_card bottom_line" id="vermont">
        Vermont ave.
        <div class="card_container">

        </div>
        ￦100
    </div>
VERMONT
            ),
            "connecticut" => new FieldCell(
                html:<<<CONNECTICUT
    <div class="monopoly_card bottom_line" id="connecticut">
        Connecticut ave.
        <div class="card_container">

        </div>
        ￦120
    </div>
CONNECTICUT
            ),
            "jail" => new FieldCell(
                html:<<<IN_JAIL
    <div class="monopoly_card angle" id="jail">
        IN
        <div class="card_symbol">
            ⛓️
        </div>
        JAIL
    </div>
IN_JAIL
            ),
            "stcharles" => new FieldCell(
                html:<<<ST_CHARLES
    <div class="monopoly_card left_line" id="stcharles">
        St.Charles place
        <div class="card_container">

        </div>
        ￦140
    </div>
ST_CHARLES
            ),
            "electric" => new FieldCell(
                html:<<<ELECTRIC
    <div class="monopoly_card left_line" id="electric">
        Electric company
        <div class="card_container">
            <div class="card_symbol">
                💡
            </div>
        </div>
        ￦150
    </div>
ELECTRIC
            ),
            "states" => new FieldCell(
                html:<<<STATES
    <div class="monopoly_card left_line" id="states">
        States ave.
        <div class="card_container">

        </div>
        ￦140
    </div>
STATES
            ),
            "virginia" => new FieldCell(
                html:<<<VIRGINIA
    <div class="monopoly_card left_line" id="virginia">
        Virginia ave.
        <div class="card_container">

        </div>
        ￦160
    </div>
VIRGINIA
            ),
            "pennsylvania_rail" => new FieldCell(
                html:<<<PENNSYLVANIA_RAIL
    <div class="monopoly_card left_line" id="pennsylvania_rail">
        Pennsylvania Railroad
        <div class="card_container">
            <div class="card_symbol">
                🚂
            </div>
        </div>
        ￦200
    </div>
PENNSYLVANIA_RAIL
            ),
            "stjames" => new FieldCell(
                html:<<<ST_JAMES
    <div class="monopoly_card left_line" id="stjames">
        St.James place
        <div class="card_container">

        </div>
        ￦180
    </div>
ST_JAMES
            ),
            "chest1" => new FieldCell(
                html:<<<CHEST1
    <div class="monopoly_card left_line" id="chest1">
        Community chest
        <div class="card_container">
            <div class="card_symbol">
                🎁
            </div>
        </div>
    </div>
CHEST1
            ),
            "tennessee" => new FieldCell(
                html:<<<TENNESSEE
    <div class="monopoly_card left_line" id="tennessee">
        Tennessee ave.
        <div class="card_container">

        </div>
        ￦180
    </div>
TENNESSEE
            ),
            "newyork" => new FieldCell(
                html:<<<NEW_YORK
    <div class="monopoly_card left_line" id="newyork">
        New York ave.
        <div class="card_container">

        </div>
        ￦200
    </div>
NEW_YORK
            ),
            "parking" => new FieldCell(
                html:<<<FREE_PARKING
    <div class="monopoly_card angle" id="parking">
        FREE
        <div class="card_symbol">
            🅿️
        </div>
        PARKING
    </div>
FREE_PARKING
            ),
            "kentucky" => new FieldCell(
                html:<<<KENTUCKY
    <div class="monopoly_card top_line" id="kentucky">
        Kentucky ave.
        <div class="card_container">

        </div>
        ￦220
    </div>
KENTUCKY

            ),
            "chance_blue" => new FieldCell(
                html:<<<CHANCE_BLUE
    <div class="monopoly_card top_line" id="chance_blue">
        Chance
        <div class="card_container">
            <div class="card_symbol">
                ❓
            </div>
        </div>
    </div>
CHANCE_BLUE
            ),
            "indiana" => new FieldCell(
                html:<<<INDIANA
    <div class="monopoly_card top_line" id="indiana">
        Indiana ave.
        <div class="card_container">

        </div>
        ￦220
    </div>
INDIANA
            ),
            "illinois" => new FieldCell(
                html:<<<ILLINOIS
    <div class="monopoly_card top_line" id="illinois">
        Illinois ave.
        <div class="card_container">

        </div>
        ￦220
    </div>
ILLINOIS
            ),
            "bno_rail" => new FieldCell(
                html:<<<BNO
    <div class="monopoly_card top_line" id="bno_rail">
        B&O Railroad
        <div class="card_container">
            <div class="card_symbol">
                🚂
            </div>
        </div>
        ￦200
    </div>
BNO
            ),
            "atlantic" => new FieldCell(
                html:<<<ATLANTIC
    <div class="monopoly_card top_line" id="atlantic">
        Atlantic ave.
        <div class="card_container">

        </div>
        ￦260
    </div>
ATLANTIC
            ),
            "vetinor" => new  FieldCell(
                html:<<<VETINOR
    <div class="monopoly_card top_line" id="vetinor">
        Vetinor ave.
        <div class="card_container">

        </div>
        ￦260
    </div>
VETINOR
            ),
            "water" => new FieldCell(
                html:<<<WATER_WORKS
    <div class="monopoly_card top_line" id="water">
        Waterworks
        <div class="card_container">
            <div class="card_symbol">
                🚰
            </div>
        </div>
        ￦150
    </div>
WATER_WORKS
            ),
            "marvin" => new FieldCell(
                html:<<<MARVIN
    <div class="monopoly_card top_line" id="marvin">
        Marvin gardens
        <div class="card_container">

        </div>
        ￦260
    </div>
MARVIN
            ),
            "to_jail" => new FieldCell(
                html:<<<TO_JAIL
    <div class="monopoly_card angle" id="to_jail">
        GO TO
        <div class="card_symbol">
            👮
        </div>
        JAIL
    </div>
TO_JAIL
            ),
            "pacific" => new FieldCell(
                html: <<<PACIFIC
    <div class="monopoly_card right_line" id="pacific">
        Pacific ave.
        <div class="card_container">

        </div>
        ￦300
    </div>
PACIFIC
            ),
            "nacarolina" => new FieldCell(
                html:<<<NORTH_CAROLINA
    <div class="monopoly_card right_line" id="ncarolina">
        North Carolina ave.
        <div class="card_container">

        </div>
        ￦300
    </div>
NORTH_CAROLINA
            ),
            "chest2" => new FieldCell(
                html:<<<CHEST2
    <div class="monopoly_card right_line" id="chest2">
        Community chest
        <div class="card_container">
            <div class="card_symbol">
                🎁
            </div>
        </div>
    </div>
CHEST2
            ),
            "pennsylvania" => new FieldCell(
                html:<<<PENNSYLVANIA
    <div class="monopoly_card right_line" id="pennsylvania">
        Pennsylvania ave.
        <div class="card_container">

        </div>
        ￦320
    </div>
PENNSYLVANIA
            ),
            "short_rail" => new FieldCell(
                html:<<<SHORT_RAIL
    <div class="monopoly_card right_line" id="short_rail">
        Short Railroad
        <div class="card_container">
            <div class="card_symbol">
                🚂
            </div>
        </div>
        ￦200
    </div>
SHORT_RAIL
            ),
            "chance_yel" => new FieldCell(
                html:<<<CHANCE_YEL
    <div class="monopoly_card right_line" id="chance_yel">
        Chance
        <div class="card_container">
            <div class="card_symbol">
                ❓
            </div>
        </div>
    </div>
CHANCE_YEL
            ),
            "park" => new FieldCell(
                html:<<<PARK
    <div class="monopoly_card right_line" id="park">
        Park place
        <div class="card_container">

        </div>
        ￦350
    </div>
PARK
            ),
            "luxury_tax" => new FieldCell(
                html:<<<LUXURY_TAX
    <div class="monopoly_card right_line" id="luxury_tax">
        Luxury tax
        <div class="card_container">
            <div class="card_symbol">
                💍
            </div>
        </div>
        Pay ￦100
    </div>
LUXURY_TAX
            ),
            "boardwalk" => new FieldCell(
                html:<<<BOARDWALK
    <div class="monopoly_card right_line" id="boardwalk">
        Boardwalk
        <div class="card_container">

        </div>
        ￦400
    </div>
BOARDWALK
            )
        ];

    }
}