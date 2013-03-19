<div>
    <h2>Pharmacopee</h2>
    
        
    <?php
       foreach ($lesMedicaments as $unMedicament) {
			$depotLegal = $unMedicament['MED_DEPOTLEGAL'];
			$nomCommercial = $unMedicament['MED_NOMCOMMERCIAL'];
                        $famille = $unMedicament['FAM_LIBELLE'];
                        $composition = $unMedicament['MED_COMPOSITION'];
                        $contreIndic = $unMedicament['MED_CONTREINDIC'];
                        $prixEchantillon = $unMedicament['MED_PRIXECHANTILLON'];
       }
     ?>                   
        <table border="1">
        <tr>
            <td>Dépot légal</td>
            <td><?php echo $depotLegal; ?></td>
        </tr>
        <tr>
            <td>Nom Commercial</td>
            <td><?php echo $nomCommercial; ?></td>
        </tr>
        <tr>
            <td>Famille</td>
            <td><?php echo $famille; ?></td>
        </tr>
        <tr>
            <td>Composition</td>
            <td><?php echo $composition; ?></td>
        </tr>
        <tr>
            <td>Contre-indication</td>
            <td><?php echo $contreIndic; ?></td>
        </tr>
        <tr>
            <td>prix échantillon</td>
            <td><?php echo $prixEchantillon; ?></td>
        </tr>
        </table>
    <a href=""><input type ="button" value ="Précédent"></a>
    <a href=""><input type ="button" value ="Suivant"></a>
    
    
   
</div>