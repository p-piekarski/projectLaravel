Klonowanie repozytorium
git clone https://github.com/p-piekarski/projectLaravel.git

Wchodzisz do folderu z projektem
git cd projectLaravel

Sprawdzasz na jakim branchu jesteś
git checkout

Pobierasz najnowsza wersje projektu
git pull


 


Działanie na branchach. 
Stworz branch w momencie kiedy zaczynasz prace.
git branch nazwabrancha

Przełącz się na branch, który stworzyłeś
git checkout nazwabrancha

Sprawdż na jakim jesteś branchu
git checkout

Pracuj, edytuj jak chcesz, a po skonczonej pracy
Zapisywanie zmian w commitach
git add .
git commit -m "nazwacommita"

Jak już zapisałeś prace na swoim branchu teraz musisz ją wrzucić na brancha master
Zmieniasz brancha na master
git checkout master

Łączysz swojego brancha z branchem master - Pamietaj, że pliki wrzucasz na branch master dlatego musisz być na masterze

git merge nazwabrancha

Upewniasz się, że wszystko dobrze zrobiłeś
git log --graph --decorate --all --oneline

Usuwasz swojego brancha
git branch -D nazwabrancha

Wrzucasz wszystko na serwer
git push


Wsparcie w postaci filmu
https://www.youtube.com/watch?v=LEystZRF8fQ&list=PLjHmWifVUNMJ4UxaI2AL4Joh7IlRqaTdd
w postaci strony
http://phpmajster.blogspot.com/2015/05/git-klonowanie-repozytorium-zdalne-repozytoria-i-klucze-ssh.html






Uruchamianie projektu
Wchodzisz w konsoli w plik projektu i odpalasz komende
php artisan serve
