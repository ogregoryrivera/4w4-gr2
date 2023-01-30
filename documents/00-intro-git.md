# Résumé des commandes git et github
## Création d'un dépôt local
   - Dans VScode sélectionner le dossier du thème et avec touche doit de la souris 
     **open in integrated terminal** 
   - git init(on exécute une seule fois cette commande). Permet de déclarer le dossier
     **.git**
   - git status
   - git add --all out git add .
   - git commit -m "s2c1 on décrit les notifications" 
   - git log
   - git log --oneline
   - git remote add 4w4 https://github.com/ogregoryrivera/4w4-gr2
   - git branch -m main (change le nom de la branche master pour main)
   - git branch lab1 (créer la branche «lab1»)
   - git checkpoint lab1(pour changer de branche vers lab1)
   - git log --oneline (la branche lab1 et main pointe vers le même commit)
   - git checkout main
   - git push 4w4 main (pousse la branche active «main» vers github dans le dépôt 4w4
                        vers la branche main)
   - git checkout lab1
   - git push 4w4 lab1
   - git branch lab2
   - git checkout lab2
   - git push 4w4 lab2 (pousse la branche active lab2 vers 4w4 dans la branche lab2)                         
