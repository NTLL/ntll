# NEW TAB LOCALHOST LINK

Tout d'abord, merci d'avoir installé NTLL.
Ce projet était à la base uniquement réservé à moi et quelques amis dev pour avoir une nouvelle page sympa répertoriant no lien favoris avec une entête Google custom lorsque nous faisons "Nouvel onglet"

Ce projet est une version améliorée afin de pouvoir le personnaliser sans devoir toucher le code (Ceci dis, afin de le personnaliser de façon plus poussée, il n'y aura pas le choix)

## INSTALLATION DE NTLL

### I Fichier à télécharger et programme à installer
<details markdown='1'><summary>Développer / Réduire</summary>
Vous aurez besoin d'un serveur local, j'utilise xampp sur Windows : https://www.apachefriends.org/fr/download.html

Pour changer le nouvel onglet par défaut j'utilise ceci New tab redirect :
https://chrome.google.com/webstore/detail/new-tab-redirect/icpgjfneehieebagbmdbhnlpiopdcmna?hl=fr

Ensuite, vous aurez besoin bien entendu du repo
</details>

### II Installation programme
<details markdown='1'><summary>Développer / Réduire</summary>
Commencez par installer Xampp (Ou votre serveur local préféré)
Si vous en avez déjà un (ce qui est fort probable) passer cette étape
Ensuite allumé le. Sur xampp c'est avec le panel.
Allumez Apache et MySQL

Allez sur Google Chrome, puis installé l'extension New tab redirect présente sur le chrome web store.
Allez dans les options de cette extension puis collé comme URL de redirection "http://127.0.0.1/ntll"

</details>

### III Installation de NTLL
<details markdown='1'><summary>Développer / Réduire</summary>

Télécharger le repo.

Dans le dossier source ce trouve la base de donnée SQL, allez sur PHPMYADMIN http://127.0.0.1/phpmyadmin
Créer une base de données au nom de "ntll"
Puis cliquer dessus et allez dans la section "importé"
Vous allez importer la base de donnée présente dans le dossier source (ntll.sql)

Déplacer le dossier ntll dans le dossier htdocs de votre serveur Xampp.

Voilà le tour est joué !

</details>

## UTILISATION DE NTLL 

Dans le header, cliquez sur "config" puis configurer les pages.

La page "config de base" vous permet de changer le nom  dans le header (Plus d'options arriverons comme la couleur principale etc..)

La page google permet de changer l'image de fond, si vous souhaitez l'afficher ou pas.
Vous pouvez créer des boutons de raccourcis et les supprimer.

Les pages d'espace de 1 à 5 permettes de mettre a jour le nom et image de la page ainsi que de cacher l'espace ou pas
Comme pour google, chaque espace auras une création de boutons avec URL de raccourcis et la possibilité de les supprimer
