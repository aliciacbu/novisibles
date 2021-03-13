# Horaris no visibles

Aquesta aplicació carrega un l'arxiu d'horaris no visibles al servidor, llegeix la primera columna amb l'ID de l'agenda, forma la URL completa i cerca si apareixen els horaris. Finalment retorna un llistat de les URLS analitzades (trigarà uns 30 segons ⏳).

## Procediment mensual
http://druida.dtibcn.cat/procediment/728/

## Requeriments
  - Format arxiu: ***xls***
  - A la primera columna de l'excel hi ha d'haver l'ID de l'agenda
  - L'excel té capçalera a la primera fila

## Limitacions
Si en un futur cal pujar l'arxiu en format ***xlsx*** caldrà habilitar la llibreria ***core/SimpleXLSX.php*** (requereix desenvolupament).

## Crèdits
Oficina Tècnica de la DTI. VASS.