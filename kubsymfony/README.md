# PHP+Symfony Kubernetes Exploration
`kubsymfony/` contains:
* A default symfony install with one controller
* Dockerfile for a PHP-FPM server
* Kubernetes definitions for a PHP/nginx deployment
* docker-compose.yaml for local development

# Deploy PHP hello world to GCloud
* Shortcut: Install VSCode containers extension `vscode:extension/ms-vscode-remote.remote-containers`. It contains kubectl, gcloud, etc
* Prerequisite: Make the following directories on your host:
  * `~/.kube`
  * `~/.aws`
  * `~/.config/gcloud`
* Otherwise, install kubectl and gcloud SDK on your local machine
* Read this tutorial: https://cloud.google.com/kubernetes-engine/docs/tutorials/hello-app
* And this one: https://matthewpalmer.net/kubernetes-app-developer/articles/php-fpm-nginx-kubernetes.html
* `composer install` -- the equivalent of `npm install`
* `docker build . -f deploy/Dockerfile -t gcr.io/kubpractice/kubsymfony:1.0.0`
* Push the image, apply the k8s files in `deploy/`
