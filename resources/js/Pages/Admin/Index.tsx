import Card from "@/Components/Card";
import CardBody from "@/Components/CardBody";
import CardFooter from "@/Components/CardFooter";
import CardTitle from "@/Components/CardTitle";
import TextInput from "@/Components/TextInput";
import AdminLayouts from "@/Layouts/Admin/AdminLayouts";
import { Head } from "@inertiajs/react";

interface IIndexProps {
    name: string;
}

const Index: React.FC<IIndexProps> = ({ name }) => {
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
                <Card>
                    <CardTitle>Card Title</CardTitle>
                    <CardBody>
                        <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Here are the biggest enterprise technology
                            acquisitions of 2021 so far, in reverse
                            chronological order.
                        </p>
                    </CardBody>
                    <CardFooter>
                        <div className="flex flex-col">
                            Card Footer
                            <button className="rounded bg-sky-600 px-3">
                                Submit
                            </button>
                        </div>
                    </CardFooter>
                </Card>
            </AdminLayouts>
        </div>
    );
};

export default Index;
