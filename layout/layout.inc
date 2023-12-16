<?php
require_once "Classes/DataModel/LayoutDataModel.php";
require_once "Classes/GlobalsUtility.php";

use Classes\DataModel\LayoutDataModel;
use Classes\GlobalsUtility;

$globalsUtility = new GlobalsUtility();
$dataModel = $globalsUtility -> GetLayoutDataModel();
$titleAddition = $dataModel->GetPageName() == "" ? "" : $dataModel->GetPageName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titleAddition?></title>
    <link rel="stylesheet" href="/css/page.css">
    <?php EchoStringArray($dataModel->GetIncludeCssTags()); ?>
    <?php EchoStringArray($dataModel->GetIncludeJs()); ?>
</head>
<body>
    <?php EchoStringArray($dataModel->GetBody());?>
</body>
</html>

<?php
/**
 * @param array $stringArray
 * @return void
 */
function EchoStringArray(Array $stringArray): void
{
    /**
    * @var $value string
    */
    foreach ($stringArray as $value)
        echo $value;
}?>