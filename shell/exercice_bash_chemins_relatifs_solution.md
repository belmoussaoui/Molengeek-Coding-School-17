![Imgur_arbo_départ](https://imgur.com/pmsbn03.png)

## Solution

1.  En étant dans **boite1**, déplacer **balle** dans **boite1**
```bash
$ cd exoBalle/boite1
$ mv boite1/boite2/balle ./
``` 
2.  En étant dans **boite1**, déplacer **balle** dans **boite3**
```bash
$ mv balle boite3
```
3.  En étant dans **boite2**, déplacer **balle** dans **boite4**
```bash
$ cd boite2
$ mv ../balle ../boite3/boite4/
```
4.  En étant dans **exoBalle**, déplacer **balle** dans **boite2**
```bash
$ cd ../../
$ mv boite1/boite3/boite4/balle boite1/boite2
```
5.  En étant dans **boite4**, déplacer **balle** dans **boite3**
```bash
$ cd boite1/boite3/boite4
$ mv ../../boite2/balle ../
```
6.  En étant dans **exoBalle**, déplacer **boite3** dans **boite2**
```bash
$ cd ../../../
$ mv boite1/boite3 boite1/boite2
```
7. En étant dans **boite4**, déplacer **balle** dans **boite4**
```bash
$ cd boite1/boite2/boite3/boite4
$ mv ../../balle ./
```
8. En étant dans **boite3**, renommer **balle** en **balle2**
```bash
$ mv boite4/balle boite4/balle2
```
![Imgur_arbo_arrivée](https://imgur.com/coM9Afx.png)

