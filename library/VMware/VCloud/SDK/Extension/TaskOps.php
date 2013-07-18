<?php
final class VMware_VCloud_SDK_Extension_TaskOps
{
    /**
     *  --[system] indicates system specific blocking task operations
     *  Others are org specific blocking task operations
     */
    // vApp Lifecycle
    const IMPORT_SINGLETON_VAPP = 'importSingletonVapp'; //Import Into New vApp --[system]
    const IMPORT_INTO_EXISTING_VAPP = 'importIntoExistingVapp'; // Import Into Existing vApp --[system]
    const VDC_INSTANTIATE_VAPP = 'vdcInstantiateVapp'; // Instantiate vApp from Template
    const VDC_COPY_VAPP = 'vdcCopyVapp';   // Copy and Move vApp
    const VDC_COMPOSE_VAPP = 'vdcComposeVapp'; // Build New vApp
    const VDC_DELETE_VAPP = 'vdcDeleteVapp'; // Delete vApp
    const VDC_UPDATE_VAPP = 'vdcUpdateVapp'; // Modify vApp
    const VDC_CAPTURE_TEMPLATE= 'vdcCaptureTemplate'; // Capture vApp Template

    // vApp Power Operations
    const VAPP_DEPLOY = 'vappDeploy';   // Start vApp (Deploy from API)
    const VAPP_UNDEPLOY_SUSPEND = 'vappUndeploySuspend'; // Suspend vApp (Undeploy from API)
    const VAPP_UNDEPLOY_POWER_OFF = 'vappUndeployPowerOff';  // Stop vApp (Undeploy from API)
    const VAPP_RESET = 'vappReset';       // Power Cycle vApp
    // API only
    const VAPP_REBOOT_GUEST = 'vappRebootGuest';  // Reboot vApp Guest OS
    const VAPP_POWER_OFF = 'vappPowerOff';    // Power Off vApp
    const VAPP_SHUTDOWN_GUEST = 'vappShutdownGuest'; // Shut down vApp Guest OS
    const VAPP_SUSPEND = 'vappSuspend';   // Suspend vApp

    // vApp Template
    const IMPORT_SINGLETON_TEMPLATE = 'importSingletonTemplate'; // Import Into New vApp Template -[system]
    const VDC_UPLOAD_OVF_CONTENTS = 'vdcUploadOvfContents'; // Upload vApp Template
    const VDC_ENABLE_DOWNLOAD = "vdcEnableDownload"; // Enable vApp Template Download --[system]
    const VDC_COPY_TEMPLATE = 'vdcCopyTemplate';  // Copy and Move vApp Template
    const VDC_DELETE_TEMPLATE = 'vdcDeleteTemplate'; // Delete vApp Template
    const VDC_UPDATE_TEMPLATE = 'vdcUpdateTemplate'; // Modify vApp Template Name and Description

    // Virtual Machine
    const VDC_RECOMPOSE_VAPP= 'vdcRecomposeVapp'; // Add, Move or Delete Virtual Machines from vApp
    const VAPP_UPDATE_VM = 'vappUpdateVm';  // Modify Virtual Machine Configuration
    const VAPP_UPGRADE_HW_VERSION = 'vappUpgradeHwVersion'; // Upgrade Virtual Machine Hardware Version

    // Media
    const IMPORT_MEDIA = 'importMedia';        // Import Media -- [system]
    const VDC_COPY_MEDIA = 'vdcCopyMedia';     // Copy Media
    const VDC_DELETE_MEDIA = 'vdcDeleteMedia'; // Delete Media
    const VDC_UPLOAD_MEDIA = 'vdcUploadMedia'; // Upload Media
    const VDC_UPDATE_MEDIA = 'vdcUpdateMedia'; // Modify Media Name and Description

    // Virtual Data Center
    const CREATE_PROVIDER_VDC = 'rclCreateProviderVdc';  // Create Provider vDC
    const DELETE_PROVIDER_VDC = 'rclDeleteProviderVdc';  // Delete Provider vDC
    const VDC_CREATE_VDC = 'vdcCreateVdc'; // Create Organization vDC
    const VDC_DELETE_VDC = 'vdcDeleteVdc'; // Delete Organization vDC
    const VDC_UPDATE_VDC = 'vdcUpdateVdc'; // Modify Organization vDC

    // Network
    const NETWORK_CREATE_EXTERNAL_NETWORK = 'networkCreateExternalNetwork';  // Create External Network --[system]
    const NETWORK_CREATE_NETWORK_POOL = 'networkCreateNetworkPool';  // Create VLAN or vSphere portgroup backed Network Pool --[system]
    const NETWORK_CREATE_ISOLATED_NETWORK_POOL = 'networkCreateFencePoolTypeNetworkPool'; // Create vCD isolation backed Network Pool --[system]
    const NETWORK_DELETE_NETWORK_POOL = 'networkDeleteNetworkPool'; // Delete Network Pool --[system]
    const NETWORK_UPDATE_NETWORK_POOL = 'networkUpdateNetworkPool'; // Modify Network Pool --[system]
    const NETWORK_UPDATE_VLAN_POOL = 'networkUpdateVlanPool';       // Modify VLAN Network Pool --[system]
    const NETWORK_UPDATE_NETWORK = 'networkUpdateNetwork';  // Modify Network
    const NETWORK_DELETE = 'networkDelete';  // Delete Network
}