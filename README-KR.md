## 라라벨 Artisan 패키지

라라벨 Artisan을 라라벨이 아닌 외부에서 사용 가능하게 합니다.

## 설치
1. ```composer require moon/artisan``` 실행.
2. ```./vendor/moon/artisan/artisan artisan:init``` 실행. 이 명령은 **artisan-config.php**와 **artisan** 파일을 생성합니다.

## 사용

**Kernel.php** 대신 ***artisan-config.php** 에 커맨드를 추가하는것을 제외하면 라라벨과 사용법은 동일합니다.

* ```php artisan make:console 이름```으로 새로운 커맨드를 만듭니다.
* 새로 생성된 커맨드는 ***Artisan\Console\Commands*** 네임스페이스를 가지게 됩니다. 만약 ```php artisan make:console Hello``` 를 실행했다면 클라스 Path는  ***Artisan\Console\Commands\Hello*** 가 됩니다. 
* 해당 클라스를 ***artisan-config.php***에 넣어주십시오.