<?php
class Guerrier extends Personnage
{
  public function frapper(Personnage $perso)
  {
      if ($perso->id == $this->id) {
          return self::CEST_MOI;
      }
      // On indique au personnage qu'il doit recevoir des dégâts.
      // Puis on retourne la valeur renvoyée par la méthode : self::PERSONNAGE_TUE ou self::PERSONNAGE_FRAPPE.

      if ($perso->type == 'archer') {
          return $perso->recevoirDegats(2);
      } else {
          return $perso->recevoirDegats(1);
      }
  }
}