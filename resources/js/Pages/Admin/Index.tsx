import AdminLayouts from "@/Layouts/Admin/AdminLayouts";
import { Head } from "@inertiajs/react";

interface IIndexProps {
    name: string;
}

const Index: React.FC<IIndexProps> = ({name}) => {
    return (
        <div>
            <Head>
                <title>Index</title>
                <meta
                    head-key="description"
                    name="description"
                    content="This is the default description"
                />
                <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
            </Head>

            <AdminLayouts>
                <h1>Content {name}</h1>
            </AdminLayouts>
        </div>
    );
};

export default Index;
