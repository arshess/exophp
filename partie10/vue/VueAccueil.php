<?php 
ob_start();
?>
    <h1 class="my-3 fw-bold">Formulaire qui déchire</h1>
    <form action="./index.php" method="post" class="p-3 shadow">
    <h2>T'es qui ?</h2>
        <div class="input-group">
            <label class="col-12 col-md-2" for="inputfirstname"><span class="input-group-text">Prénom :</span></label>
            <input type="text" id="inputfirstname" maxlength="50" name="inputfirstname" value="<?=$input['FirstName']?>" class="form-control <?=$Validate['FirstName']?>">
            <label class="col-12 col-md-2" for="inputlastname"><span class="input-group-text">Nom :</span></label>
            <input type="text" id="inputlastname" maxlength="50" name="inputlastname" value="<?=$input['LastName']?>" class="form-control <?=$Validate['LastName']?>">
        </div>
        
        <div class="input-group">
            <label class="" for="inputbirthday"><span class="input-group-text">Date de naissance :</span></label>
            <input type="date" validationMessage="test" id="inputbirthday" name="inputbirthday" value="<?=$input['BirthDay']?>" class="form-control <?=$Validate['BirthDay']?>">
        </div>
        <div class="input-group">
            <label class="" for="inputcountry"><span class="input-group-text">Pays de naissance :</span></label>
            <select name="inputcountry" id="inputcountry" class=" nes-select form-select <?=$Validate['BirthPlace']?>" id="">
                <?php foreach($countries as $country){ ?>
                    <option <?= $input['Pays']==$country?"selected":"" ;?> value="<?=$country ?>"><?=$country ?></option>
                <?php } ?>;
                </select>
                </div>
        <div class="input-group">
            <label class="" for="inputnationalite"><span class="input-group-text">Nationnalité :</span></label>
            <input type="text" id="inputnationalite" maxlength="50" name="inputnationalite" value="<?=$input['Nationnalite']?>" class="form-control <?=$Validate['Nationalite']?> col-3">
        </div>
        <h2>Adresse :</h2>
        <div class="input-group">
            <label class="col-12 col-md-2" for="inputnumrue"><span class="input-group-text">Numéro :</span></label>
            <input type="text" id="inputnumrue" maxlength="6" value="<?=$input['NumRue']?>" name="inputnumrue" class="form-control  <?=$Validate['NumRue']?>">
            <label  for="inputrue"><span class="input-group-text">Rue :</span></label>
            <input type="text" id="inputrue" maxlength="50" value="<?=$input['Rue']?>" name="inputrue" class="form-control <?=$Validate['Rue']?>">
        </div>
        <div class="input-group">
            <label class="col-12 col-lg-2" for="inputCP"><span class="input-group-text" >Code Postal :</span></label>
                <input type="text" id="inputCP" value="<?=$input['CP']?>" name="inputCP" maxlength="5" class="form-control <?=$Validate['CP']?>">
            <label  class="col-12 col-md-3" for="inputcity"><span class="input-group-text">Ville :</span></label>
                <input type="text" id="inputcity" maxlength="100" value="<?=$input['City']?>" name="inputcity" class="form-control <?=$Validate['City']?>">
        </div>
        <h2>Contact :</h2>
        
        <div class="input-group">
            <label  class="col-12 col-md-3"  for="inputmail">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i>&nbsp;Courriel :</span>
            </label>
            <input type="email" id="inputmail" value="<?=$input['Mail']?>" name="inputmail" placeholder="example@example.com" class="form-control <?=$Validate['Mail']?>">
        </div>
        
        <div class="input-group">
            <label  class="col-12 col-md-3" for="inputphone">
                <span class="input-group-text" ><i class="bi bi-telephone-fill"></i>&nbsp;Téléphone :</span>
            </label>
            <input type="tel" id="inputphone" value="<?=$input['Phone']?>" placeholder="0X-XX-XX-XX-XX" name="inputphone" class="form-control <?=$Validate['Phone']?>" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
        </div>        
        <h2>Diplômes :</h2>
        <div class="input-group">
            <label for="inputdiplome"><span class="input-group-text" >Diplôme :</label></span>
            <select name="inputdiplome" id="inputdiplome" class="form-select  <?=$Validate['Diplome']?>"">
                <option <?= $input['Diplome']=="0"?"selected":"" ;?> value="0">Sans diplômes</option>
                <option <?= $input['Diplome']=="1"?"selected":"" ;?> value="1">Baccalauréat</option>
                <option <?= $input['Diplome']=="2"?"selected":"" ;?> value="2">Bac +2 ou équivalent</option>
                <option <?= $input['Diplome']=="3"?"selected":"" ;?> value="3">Bac +3 ou supérieur</option>
            </select>
      </div>
      <h2>Pôle Emploi : </h2>
        <div class="input-group">
        <label for="inputanpe"><span class="input-group-text" >Identifiant Pôle Emploi :</span></label>
        <input type="text" id="inputanpe" value="<?=$input['Anpe']?>" name="inputanpe" maxlength="10"class="form-control <?=$Validate['PoleEmploi']?>">
        </div>
        <h2>Infos Codecademy :</h2>
        <div class="input-group">
            <label lass="col-12 col-lg-2" for="inputcodecademy"><span class="input-group-text">Lien profil :</span></label>
            <input type="url" title="Lien de votre profile CodecAdemy" id="inputcodecademy" placeholder="https://www.codecademy.com/profiles/votreprofil" value="<?=$input['CodecAdemy']?>" name="inputcodecademy" class="form-control <?=$Validate['CodecUrl']?>">
            </div>
            <div class="input-group">
            <label for="inputbadge"><span class="input-group-text" >Nombre de badges :</span></label>
            <input type="number" id="inputbadge" value="<?=$input['BadgeCodec']?>" name="inputbadge" class="form-control <?=$Validate['CodecBadge']?>">        
        </div>
        <h2>Divers :</h2>
        <label for="inputsuperhero"><h5>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? :</h5></label>
        <textarea name="inputsuperhero" id="inputsuperhero" cols="30"  class="form-control <?=$Validate['Hero']?>" rows="5"><?=$input['SuperHero']?></textarea>
        <label for="inputhack"><h5>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</h5></label>
        <textarea name="inputhack" id="inputhack" cols="30"  class="form-control <?=$Validate['Hack']?>" rows="5"><?=$input['Hack']?></textarea>
        <label for="inputexpe"><h5>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</h5></label>
        
        <div class="form-check">
            <input type="radio" id="inputexpY" name="inputexp" value="1" <?= ($input['Exp']=="1"||$input['Exp']=="Caramba")?" checked ":"";?> class="form-check-input <?=$Validate['Exp']?>">
            <label class="form-check-label" for="inputexpY">
                Oui
            </label>
        </div>
        <div class="form-check">
            <input type="radio" name="inputexp" id="inputexpN" value="0" <?= ($input['Exp']=="0")?" checked ":"";?>  class="form-check-input <?=$Validate['Exp']?>">
            <label class="form-check-label" for="inputexpN">
                Non
            </label>
        </div>
        <input class="btn col-6 offset-md-7 col-md-3 btn-submit " type="submit" name="submit" value="Zou !!!">
        <input class="btn offset-2 offset-md-0 col-3 col-md-1 btn-reset" id="btn-reset" type="button" value="Reset">
    </form>
<?php $content = ob_get_clean(); 
require('./vue/gabarit.php');