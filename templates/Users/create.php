
<?php
   echo $this->Form->create(NULL,array('url'=>'/users/add'));
   echo $this->Form->control('username');
   echo $this->Form->control('email');
   echo $this->Form->control('password');
   echo $this->Form->control('phone');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>