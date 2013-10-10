vmware-vcloud-sdk-php-patched version 5.5.0
===========================================

VMware vCloud SDK for PHP (patched version) - Repository for importing with Composer

This project is a fork from the [original VMWare SDK for PHP](https://github.com/amercier/vmware-vcloud-sdk-php),
with the exception of the following additions and changes:

✔ Split `VMware/VCloud/API.php` (5 MB), and a few other files into individual class files  
✔ Normalized class paths (`VMware/VCloud/SDK/**/*.php` and `VMware/VCloud/API/**/*.php`)  
✔ Compatible with [Composer](http://getcomposer.org/)'s autoloading  
✔ Fixed [#2](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/2): Allow retrieving the currently logged user's username and token  
✔ Fixed [#3](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/3): Remove unnecessary require_once  
✔ Fixed [#5](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/5): Edge gateway modification doesn't work  
✔ Fixed [#6](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/6): Uploading big OVF files doesn't work  
✔ Fixed [#7](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/7): Uploading OVF files doesn't work on Windows/Cygwin  
✔ Fixed [#8](https://github.com/amercier/vmware-vcloud-sdk-php-patched/issues/8): Set image type in VMWare_VCloud_SDK_Vdc::uploadMedia (credits to @brianium)  
✔ Fixed [#9](https://github.com/amercier/vmware-vcloud-sdk-php-patched/pull/9): Add support for storageKB field on VMware_VCloud_API_QueryResultVAppTemp (credits to @brianium)  
✔ Fixed [#12](https://github.com/amercier/vmware-vcloud-sdk-php-patched/pull/12): VMware_VCloud_SDK_Vdc::sendUploadVAppTemplateRequest should uses $vdcStorageProfileRef (credits to @brianium)  
✔ Fixed [#16](https://github.com/amercier/vmware-vcloud-sdk-php-patched/pull/16): OperatingSytemSection and VirtualHardwareSection should have the "ovf" namespace (credits to @brianium)  
✔ Fixed [#17](https://github.com/amercier/vmware-vcloud-sdk-php-patched/pull/17): Add support for details in VMware_VCloud_API_QueryResultTaskRecordType (credits to @brianium)  
✔ Fixed [#18](https://github.com/amercier/vmware-vcloud-sdk-php-patched/pull/18): Add vmPendingQuestion to SDK_Constants (credits to @brianium)  


Versioning
----------

Using [Semver](http://semver.org/) as a base for versioning, this project also
follow additional guidelines for version numbering. each version is in the
format `vwx.y.z` where:

  - `vwx` is the concatenation of the vCloud SDK that this SDK is based upon (eg. "512" for 5.1.2)
  - Each modification of `y` introduces a new patch
  - Modifications of `y` are simply corrections of existing patches


Licensing
---------

This project is released under [Creative Commons - Attribution 3.0 Unported](LICENSE-CC-BY.md)
license. If this license does not fit your requirement for whatever reason, but
you would be interested in using the work (as defined below) under another
license, please contact Alexandre Mercier at pro.alexandre.mercier@gmail.com .


Contributing
------------

Contributions (issues ♥, pull requests ♥♥♥) are more than welcome! Feel free to
clone, fork, modify, extend, etc, as long as you respect the [license terms](LICENSE-CC-BY.md).

**Installation**: after cloning the project, all you need to to is execute
`make install`.

**SDK Generation**: you need to execute `make` in order to generate SDK from the
original SDK.

**Testing**: `make test`

