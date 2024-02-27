import React, { PropsWithChildren, useState } from "react";
import Header from "@/Components/Admin/Header";
import Sidebar from "@/Components/Admin/Sidebar";
import { Head } from "@inertiajs/react";

const AdminLayouts: React.FC<PropsWithChildren> = ({ children }) => {

    const [isOpen, setIsOpen] = useState(false);   

    return (
        <>
            <Head>
                <title>My app</title>
                <meta
                    head-key="description"
                    name="description"
                    content="This is the default description"
                />
                <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
            </Head>

            <Header isOpen={isOpen} setIsOpen={setIsOpen} />

            <div className="flex justify-center">

                <Sidebar isOpen={isOpen}/>
              
                <main className="mx-6 my-5">{children}</main>

            </div>
            
        </>
    );
};

export default AdminLayouts;
