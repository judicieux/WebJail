# WebJail

**Introduction**

- Le challenge nous fournit une page qui nous offre la possibilité d'exécuter des commandes via un formulaire.
- Note, les données de formulaire sont représentées de la manière suivante: ``command=rand&execute=Execute``
<br/>

![image](https://user-images.githubusercontent.com/74382279/157316465-417a8162-bf1d-441a-a6ac-18687dc8521d.png)

J'essaye d'envoyer une commande Python: ``print(1)``, mais aucun résultat. Je suppose donc qu'on doit jouer avec la requête pour trouver le bon point d'entrée.<br/>
Pour ce faire je teste plusieurs techniques d'escape, quand finalement j'obtiens un résultat différent. La commande suivante: ``);print(1)#``

![image](https://user-images.githubusercontent.com/74382279/157317785-2baf2def-ea0a-48e6-9e94-1079e55cc2a7.png)

