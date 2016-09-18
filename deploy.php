<?php
/*
 * This file has been generated automatically.
 * Please change the configuration for correct use deploy.
 */

task('github', function() {
  writeln('Deploy to GitHub pages');
  runLocally("git subtree push --prefix build_production origin gh-pages");
})->desc('Deploy the site to GitHub pages.');
