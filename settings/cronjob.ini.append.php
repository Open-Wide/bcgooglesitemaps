<?php /* #?ini charset="utf-8"?

[CronjobPart-googlesitemaps]
Scripts[]
Scripts[]=generate.php

# Used to generate one sitemap by siteaccess
# with the rootnodeid from the content.ini's siteaccess
[CronjobPart-googlesitemapsfromsiteaccessinfos]
Scripts[]
Scripts[]=generatefromsiteaccessinfos.php

[CronjobPart-googlesitemapsmultilingual]
Scripts[]
Scripts[]=generatemultilingual.php

[CronjobSettings]
Scripts[]=generate.php
Scripts[]=generatefromsiteaccessinfos.php
Scripts[]=generatemultilingual.php
ExtensionDirectories[]=bcgooglesitemaps

*/ ?>