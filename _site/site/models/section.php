<<?php

class SectionPage extends Page {
  public function url() {
    return $this->parent()->url() . '#' . $this->uid();
  }
}
