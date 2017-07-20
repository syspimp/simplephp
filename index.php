<?php

echo "<h1>Welcome to the end of the demonstration.</h1><h3>Success/h3>";
echo "<p>Play around</p>";
echo "<p>access the <a href='https://ose-cluster-master.stack.maskedadmins.com:8443/console/'>Openshift Container Platform console</a></p>";
echo "<p>access the <a href='https://tower.stack.maskedadmins.com'>Redhat Openstack 10</a></p>";
echo "<p>access the <a href='https://tower.stack.maskedadmins.com'>Ansible Tower console</a></p>";
echo "<p>access the <a href='https://cloudforms.stack.maskedadmins.com'>Cloudforms console</a></p>";
echo "<p>access the <a href='https://satellite.stack.maskedadmins.com'>Satellite console</a></p>";
echo "<p>Variable Dumps</p><pre>";
var_dump($_SERVER);
var_dump($_ENV);
echo "</pre>";
