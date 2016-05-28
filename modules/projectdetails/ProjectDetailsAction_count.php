<?php
include_once("ProjectDetailsManager.php");      

$blockscount = 0;
if(isset($_REQUEST['blockscount'])){
    $blockscount = $_REQUEST['blockscount'];
}


if(isset($_REQUEST['prdetailslist'])){
    $projectdls = $_REQUEST['prdetailslist'];
}

$clusters = Array();
?>

<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<table class='container'>
<tr><td>
	<table class='contenttable'>
	<tr>
	  	<td>
                    <h3>Clusters</h3>
                    <p>
                        Your query returned too many data to be displayed <?php echo "[$blockscount blocks]";?>. <br>
                        The system identified a blocks pattern and summarized the data in to clusters displayed below.
                    </p>
                </td>
                
        </tr>
        <tr>
            <td>
                <?php
                    if(sizeof($projectdls) > 0){
                        foreach ($projectdls As $prdls){
                            $blockref = $prdls->getRefno();
                            $blocknum = $prdls->getBlocknumber();
                            $trimed_blockno = substr($blocknum,0,1);
                            $clusters[$trimed_blockno] .= $blockref.",";
                            //echo "$blockref | $trimed_blockno <br>";
                           
                        }
                         //var_dump($clusters);
                         
                         //$cluster_A = serialize($clusters['A']);
                         //echo "<a href=index.php?m=projectdetails&a=ProjectDetails&cluster=$cluster_A>A<a>";
                         
                         //$cluster_A = unserialize($cluster_A);
                         //echo $cluster_A."<br><br>";
                        echo "<ul>";
                        foreach($clusters As $key=>$value){
                            echo "<li><a href=index.php?m=projectdetails&a=ProjectDetailsShort&cluster=".serialize($value).">Cluster $key<a></li>";
                        }
                        echo "</ul>";
                    }
                ?>
            </td>
        </tr>
        </table>
</td></tr>
</table>