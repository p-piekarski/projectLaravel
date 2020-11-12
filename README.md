## 1. Konfiguracja wstępna gita

git config --global user.name "John Doe"

git config --global user.email johndoe@example.com

2. Klonowanie repozytorium

git clone https://github.com/p-piekarski/projectLaravel.git

3. Wchodzisz do folderu z projektem

git cd projectLaravel

4. Sprawdzasz na jakim branchu jesteś (musisz byc na masterze)

git checkout

5. Pobierasz najnowsza wersje projektu

git pull


 


## Działanie na branchach. 
1. Stworz branch w momencie kiedy zaczynasz prace.

git branch nazwabrancha

2. Przełącz się na branch, który stworzyłeś

git checkout nazwabrancha

3. Sprawdż na jakim jesteś branchu

git checkout

4. Pracuj, edytuj jak chcesz, a po skonczonej pracy

## Zapisywanie zmian w commitach

git add .

git commit -m "nazwacommita"

Jak już zapisałeś prace na swoim branchu teraz musisz ją wrzucić na brancha master

5. Zmieniasz brancha na master

git checkout master

6. Łączysz swojego brancha z branchem master - Pamietaj, że pliki wrzucasz na branch master dlatego musisz być na masterze

git merge nazwabrancha

7. Upewniasz się, że wszystko dobrze zrobiłeś

git log --graph --decorate --all --oneline

8. Usuwasz swojego brancha
git branch -D nazwabrancha

9. Wrzucasz wszystko na serwer
git push


Wsparcie w postaci filmu
https://www.youtube.com/watch?v=LEystZRF8fQ&list=PLjHmWifVUNMJ4UxaI2AL4Joh7IlRqaTdd

w postaci strony
http://phpmajster.blogspot.com/2015/05/git-klonowanie-repozytorium-zdalne-repozytoria-i-klucze-ssh.html






Uruchamianie projektu

Wchodzisz w konsoli w plik projektu i odpalasz komende

php artisan serve
