import React, { PropsWithChildren } from "react";

const Form: React.FC<PropsWithChildren> = ({ children, onSubmit }) => {
    return (
        <>
            <form onSubmit={onSubmit}>{children}</form>
        </>
    );
};

export default Form;
