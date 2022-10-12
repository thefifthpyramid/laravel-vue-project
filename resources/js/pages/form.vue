<template>
    <div>
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <Space direction="vertical">
                <Space wrap>
                    <Button type="default" ghost>Default</Button>
                    <Button type="primary" ghost>Primary</Button>
                    <Button type="dashed" ghost>Dashed</Button>
                    <Button type="text" ghost>Text</Button>
                </Space>
                <Space wrap>
                    <Button type="info" ghost>Info</Button>
                    <Button type="success" ghost>Success</Button>
                    <Button type="warning" ghost>Warning</Button>
                    <Button type="error" ghost>Error</Button>
                </Space>
            </Space>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
</template>
