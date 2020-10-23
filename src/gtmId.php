<?php

namespace candyblue\gtm;

class gtm {
  public function gtmId() {
    return kirby()->site()->gtmId()->isNotEmpty() ? kirby()->site()->gtmId()->value() : option('candyblue.kirby3-gtm.id');
  }
}
