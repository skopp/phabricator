<?php

final class PhabricatorPhrictionConfigOptions
  extends PhabricatorApplicationConfigOptions {

  public function getName() {
    return pht("Phriction");
  }

  public function getDescription() {
    return pht("Options related to Phriction (wiki).");
  }

  public function getOptions() {
    return array(
      $this->newOption('phriction.enabled', 'bool', true)
        ->setBoolOptions(
          array(
            pht("Enable Phriction"),
            pht("Disable Phriction"),
          ))
        ->setDescription(pht(
          "Deprecated, use 'phabricator.uninstalled-applications' instead.")),
      $this->newOption(
        'metamta.phriction.subject-prefix', 'string', '[Phriction]')
        ->setDescription(pht("Subject prefix for Phriction email.")),
    );
  }

}
