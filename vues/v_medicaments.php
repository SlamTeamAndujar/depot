<<<<<<< HEAD
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
=======
<div id="contenu">
    <h2>Pharmacopee</h2>
    
        
    <?php
    
       
			$depotLegal = $lesMedicaments[$num]['MED_DEPOTLEGAL'];
			$nomCommercial = $lesMedicaments[$num]['MED_NOMCOMMERCIAL'];
                        $famille = $lesMedicaments[$num]['FAM_LIBELLE'];
                        $composition = $lesMedicaments[$num]['MED_COMPOSITION'];
                        $contreIndic = $lesMedicaments[$num]['MED_CONTREINDIC'];
                        $prixEchantillon = $lesMedicaments[$num]['MED_PRIXECHANTILLON'];
       
     ?>                   
        <table border="1">
        <tr>
            <th bgcolor="#77AADD">Dépot légal</th>
            <td><?php echo $depotLegal; ?></td>
        </tr>
        <tr>
            <th bgcolor="#77AADD">Nom Commercial</th>
            <td><?php echo $nomCommercial; ?></td>
        </tr>
        <tr>
            <th bgcolor="#77AADD">Famille</th>
            <td><?php echo $famille; ?></td>
        </tr>
        <tr>
            <th bgcolor="#77AADD">Composition</th>
            <td><?php echo $composition; ?></td>
        </tr>
        <tr>
            <th bgcolor="#77AADD">Contre-indication</th>
            <td><?php echo $contreIndic; ?></td>
        </tr>
        <tr>
            <th bgcolor="#77AADD">prix échantillon</th>
            <td><?php echo $prixEchantillon; ?></td>
        </tr>
        </table>
    <?php 
        if ($num == 0){
    ?>
            
            <a href="index.php?uc=consulterMedicaments&action=voirMedicaments&num=<?php echo $num + 1; ?>"><input type ="button" value ="Suivant"></a>
    <?php
        }
        elseif ($num ==27){
    ?>
            <a href="index.php?uc=consulterMedicaments&action=voirMedicaments&num=<?php echo $num - 1; ?>"><input type ="button" value ="Précédent"></a>
            
    <?php
        }
        else{
    ?>
            <a href="index.php?uc=consulterMedicaments&action=voirMedicaments&num=<?php echo $num - 1; ?>"><input type ="button" value ="Précédent"></a>
            <a href="index.php?uc=consulterMedicaments&action=voirMedicaments&num=<?php echo $num + 1; ?>"><input type ="button" value ="Suivant"></a>
    <?php        
        }    
    ?>
    
    
   
</div>
>>>>>>> 032457b7d4024ede94004110e26e376a80a51558
