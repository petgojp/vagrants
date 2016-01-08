# Vagrantfile

各プロジェクトで利用するVagrantfileです。

## 前提条件

下記のVagrantプラグインが必要になります。

* vagrant-omnibus
* vagrant-vbguest

```bash
$ vagrant plugin install vagrant-omnibus
$ vagrant plugin install vagrant-vbguest
```

## 使い方

Vagrantfileがあるディレクトリでvagrant upを実行します。

```bash
$ vagrant up
```

Chefの再実行を行うにはvagrant provisionを実行します。

```bash
$ vagrant provision
```

### 諸注意

#### cookbooksが取得できていない場合

下記のコマンドを実行して取得します。

```
$ git submodule init
$ git submodule update
```

#### coookbooksを最新化する場合

下記のコマンドを実行して最新化します。

```
$ git submodule foreach git pull origin master
```
