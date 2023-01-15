<!-- Navigation walker example here: https://github.com/chrisbeluga/kirby-navigation -->

<?php if($site->primaryNavigation()->isNotEmpty()): ?>
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <?php foreach($site->primaryNavigation()->toStructure() as $nav): ?>
        <li>
          <a href="<?php echo $nav->url(); ?>" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white" <?php e($nav->isOpen(), "aria-current='page'") ?>>
            <?php echo $nav->text() ?>
          </a>
          <?php if($nav->children()->isNotEmpty()): ?>
            <ul>
              <?php foreach($nav->children()->toStructure() as $child): ?>
                <li>
                  <a href="<?php echo $child->url() ?>">
                    <?php echo $child->text() ?>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          <?php endif ?>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>