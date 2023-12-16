<?php

require_once  "classes/DataModel/LayoutDataModel.php";
require_once  "classes/GlobalsUtility.php";

use classes\GlobalsUtility;
use classes\DataModel\LayoutDataModel;

$globalUtility = new GlobalsUtility();
$layoutDataModel = $globalUtility ->GetLayoutDataModel();
$layoutDataModel->SetPageName("Calc");
$layoutDataModel->IncludeJsLink("CalcButtonHandler.js");
$layoutDataModel -> IncludeJsLink("https://code.jquery.com/jquery-3.7.1.js");
$layoutDataModel->IncludeCss("index.css");
$layoutDataModel->IncludeCss("calc.css");
$layoutDataModel -> IncludeJsText(<<<JS
 
import CalcButtonHandler from "/js/CalcButtonHandler.js" 
 
JS);

$layoutDataModel->AddBodySegment( <<<BODY
        <div class="container">
             <div id="output_field" class="display">989</div>
             <div class="buttons">
                <button id="1"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">1</button>
                <button id="2"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">2</button>
                <button id="3"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">3</button>
                <button id="plus"  onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-operator">+</button>
                <button id="4"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">4</button>
                <button id="5"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">5</button>
                <button id="6"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">6</button>
                <button id="minus" onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-operator">-</button>
                <button id="7"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">7</button>
                <button id="8"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">8</button>
                <button id="9"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">9</button>
                <button id="multi" onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-operator">*</button>
                <button id="clear" onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-clear">C</button>
                <button id="0"     onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-number">0</button>
                <button id="equal" onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-equals">=</button>
                <button id="div"   onclick="CalcButtonHandler.buttonClck(this.id)" class="btn btn-operator">/</button>
            </div>
        </div>
BODY
);

require_once "Layout/layout.inc";
function inputNumbers()
{

}