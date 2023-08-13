<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_domains  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		
    // Définir la fonction isValidDomain ici
    function isValidDomain($domain)
    {

				
        // Convertir le domaine en minuscules pour une validation cohérente
        $domain = strtolower($domain);

        // Valider les domaines ASCII (lettres, chiffres, tiret)
        $asciiPattern = '/^[a-z0-9\-]+$/';
        if (preg_match($asciiPattern, $domain)) {
            // Vérifier les exigences de longueur
            if (strlen($domain) > 63) {
                return "Le domaine doit avoir moins de 63 caractères.";
            }

            // Vérifier l'emplacement du tiret
            if (strpos($domain, '--') !== false || $domain[2] === '-') {
                return "Le domaine ne peut pas contenir deux tirets consécutifs ou commencer par un tiret.";
            }

            // Vérifier si le domaine commence ou se termine par un tiret
            if ($domain[0] === '-' || substr($domain, -1) === '-') {
                return "Le domaine ne peut pas commencer ou se terminer par un tiret.";
            }

            return ''; // Validation réussie
        }

        // Valider les domaines IDN
        $idnPattern = '/^[a-z0-9\-àáâãäåæçèéêëìíîïñòóôõöœùúûüýÿß]+$/';
        if (preg_match($idnPattern, $domain)) {
            // Vérifier si le domaine commence ou se termine par un tiret
            if ($domain[0] === '-' || substr($domain, -1) === '-') {
                return "Le domaine ne peut pas commencer ou se terminer par un tiret.";
            }

            return ''; // Validation réussie
        }

        return "Le domaine n'est pas valide."; // Échec de la validation
    }

    // Continuer avec le reste de la logique BeforeAdd
    $domainFieldName = 'domain'; // Remplacez par le nom réel du champ
    $domain = $values[$domainFieldName];

    // Vérifier si le domaine est valide en utilisant la fonction isValidDomain
    $validationMessage = isValidDomain($domain);
    if (!empty($validationMessage)) {
        $message = $validationMessage;
        return false;
    }

    // ... autres validations et traitements ...

    // Retourner vrai pour permettre l'ajout
    return true;

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
