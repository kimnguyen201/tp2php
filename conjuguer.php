<?php
  $terminaisons = array(
    "present" => array("e","es","e","ons","ez","ent"),
    "futur" => array("erai","eras","era","erons","erez","eront"),
    "imparfait" => array("ais","ais","ait","ions","iez","aient"));
  $pronoms = array("je","tu","il/elle/on","nous","vous","ils/elles");
  if (isset($_POST['verbe'])) {
    $longueurMot = strlen($_POST['verbe']);
    $terminaison = substr($_POST['verbe'], 0, $longueurMot-2);
    
    $i = 0;
    foreach ($_POST['temps'] as $temps) {
      if ($temps == 'present') {
        echo "Pr&eacute;sent: <br>";
        while ($i < 6) {
          echo $pronoms[$i] . ' ' . $terminaison . '' . $terminaisons['present'][$i] . '<br>';
          $i++;
        }
        $i = 0;
        echo "<br>";
      }
      else if ($temps == 'futur') {
        echo "Futur: <br>";
        while ($i < 6) {
          echo $pronoms[$i] . ' ' . $terminaison . '' . $terminaisons['futur'][$i] . '<br>';
          $i++;
        }
        $i = 0;
        echo "<br>";
      }
      else {
        echo "Imparfait: <br>";
        while ($i < 6) {
          echo $pronoms[$i] . ' ' . $terminaison . '' . $terminaisons['imparfait'][$i] . '<br>';
          $i++;
        }
      }
    }
  }
?>